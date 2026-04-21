import {get} from '@loopback/rest';
import {exec} from 'child_process';
import {promisify} from 'util';

const execAsync = promisify(exec);

async function run(cmd: string): Promise<string> {
  try {
    const {stdout} = await execAsync(cmd);
    return stdout.trim();
  } catch {
    return '';
  }
}

export class StatsController {
  @get('/data.php', {responses: {'200': {description: 'System stats'}}})
  async getStats(): Promise<object> {
    const [tempRaw, ramRaw, uptimeRaw, visitorsRaw, connRaw] = await Promise.all([
      run("vcgencmd measure_temp | egrep -o '[0-9.]+'"),
      run("free | grep Mem | awk '{print int($3/$2 * 100)}'"),
      run('uptime -p'),
      run("awk '{print $1}' /var/log/nginx/access.log | sort | uniq | wc -l"),
      run('ss -tn state established | wc -l'),
    ]);

    const temp = tempRaw ? tempRaw + '°C' : '--°C';
    const ram  = ramRaw  ? ramRaw  + '%'  : '--%';
    const uptime = uptimeRaw.replace(/^up /, '') || '--';
    const visitors = visitorsRaw || '0';
    const conn = parseInt(connRaw) > 0 ? String(parseInt(connRaw) - 1) : '0';

    return {temp, ram, uptime, visitors, connections: conn};
  }
}
