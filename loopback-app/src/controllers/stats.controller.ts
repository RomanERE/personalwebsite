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
    const [tempRaw, memRaw, uptimeRaw, visitorsRaw, connRaw] = await Promise.all([
      run('vcgencmd measure_temp'),
      run('free -m'),
      run('uptime -p'),
      run("awk '{print }' /var/log/nginx/access.log | sort -u | wc -l"),
      run('ss -tn state established | tail -n +2 | wc -l'),
    ]);

    const temp = tempRaw.replace('temp=', '') || '--';

    const memLine = memRaw.split('\n').find(l => l.startsWith('Mem:')) ?? '';
    const memParts = memLine.split(/\s+/);
    const ram = memParts[1] && memParts[2]
      ? Math.round((+memParts[2] / +memParts[1]) * 100) + '%'
      : '--';

    return {
      temp,
      ram,
      uptime: uptimeRaw || '--',
      visitors: visitorsRaw || '0',
      connections: connRaw || '0',
    };
  }
}
