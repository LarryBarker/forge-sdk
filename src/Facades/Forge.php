<?php

namespace Laravel\Forge\Facades;

use Illuminate\Support\Facades\Facade;
use Laravel\Forge\ForgeManager;

/**
 * @method static \Laravel\Forge\Forge setApiKey(string $apiKey, \GuzzleHttp\Client|null $guzzle = null)
 * @method static \Laravel\Forge\Forge setTimeout(int $timeout)
 * @method static int getTimeout()
 * @method static \Laravel\Forge\Resources\User user()
 * @method static \Laravel\Forge\Resources\BackupConfiguration[] backupConfigurations(string $serverId)
 * @method static \Laravel\Forge\Resources\BackupConfiguration backupConfiguration(string $serverId, string $backupConfigurationId)
 * @method static \Laravel\Forge\Resources\BackupConfiguration createBackupConfiguration(string $serverId, array $data)
 * @method static \Laravel\Forge\Resources\BackupConfiguration updateBackupConfiguration(int $serverId, int $backupConfigurationId, array $data)
 * @method static void deleteBackupConfiguration(string $serverId, string $backupConfigurationId)
 * @method static void restoreBackup(string $serverId, string $backupConfigurationId, string $backupId)
 * @method static void deleteBackup(string $serverId, string $backupConfigurationId, string $backupId)
 * @method static \Laravel\Forge\Resources\Certificate[] certificates(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\Certificate certificate(int $serverId, int $siteId, int $certificateId)
 * @method static \Laravel\Forge\Resources\Certificate createCertificate(int $serverId, int $siteId, array $data, bool $wait = true)
 * @method static void deleteCertificate(int $serverId, int $siteId, int $certificateId)
 * @method static string getCertificateSigningRequest(int $serverId, int $siteId, int $certificateId)
 * @method static void installCertificate(int $serverId, int $siteId, int $certificateId, array $data, bool $wait = true)
 * @method static void activateCertificate(int $serverId, int $siteId, int $certificateId, bool $wait = true)
 * @method static \Laravel\Forge\Resources\Certificate obtainLetsEncryptCertificate(int $serverId, int $siteId, array $data, bool $wait = true)
 * @method static \Laravel\Forge\Resources\Credential[] credentials()
 * @method static \Laravel\Forge\Resources\Daemon[] daemons(int $serverId)
 * @method static \Laravel\Forge\Resources\Daemon daemon(int $serverId, int $daemonId)
 * @method static \Laravel\Forge\Resources\Daemon createDaemon(int $serverId, array $data, bool $wait = true)
 * @method static void restartDaemon(int $serverId, int $daemonId, bool $wait = true)
 * @method static void deleteDaemon(int $serverId, int $daemonId)
 * @method static \Laravel\Forge\Resources\Database[] databases(int $serverId)
 * @method static \Laravel\Forge\Resources\Database database(int $serverId, int $databaseId)
 * @method static \Laravel\Forge\Resources\Database createDatabase(int $serverId, array $data, bool $wait = true)
 * @method static \Laravel\Forge\Resources\Database updateDatabase(int $serverId, int $databaseId, array $data)
 * @method static void deleteDatabase(int $serverId, int $databaseId)
 * @method static void syncDatabases(int $serverId)
 * @method static \Laravel\Forge\Resources\DatabaseUser[] databaseUsers(int $serverId)
 * @method static \Laravel\Forge\Resources\DatabaseUser databaseUser(int $serverId, int $userId)
 * @method static \Laravel\Forge\Resources\DatabaseUser createDatabaseUser(int $serverId, array $data, bool $wait = true)
 * @method static \Laravel\Forge\Resources\DatabaseUser updateDatabaseUser(int $serverId, int $userId, array $data)
 * @method static void deleteDatabaseUser(int $serverId, int $userId)
 * @method static \Laravel\Forge\Resources\FirewallRule[] firewallRules(int $serverId)
 * @method static \Laravel\Forge\Resources\FirewallRule firewallRule(int $serverId, int $ruleId)
 * @method static \Laravel\Forge\Resources\FirewallRule createFirewallRule(int $serverId, array $data, bool $wait = true)
 * @method static void deleteFirewallRule(int $serverId, int $ruleId)
 * @method static \Laravel\Forge\Resources\Job[] jobs(int $serverId)
 * @method static \Laravel\Forge\Resources\Job job(int $serverId, int $jobId)
 * @method static \Laravel\Forge\Resources\Job createJob(int $serverId, array $data, bool $wait = true)
 * @method static void deleteJob(int $serverId, int $jobId)
 * @method static \Laravel\Forge\Resources\Monitor[] monitors(int $serverId)
 * @method static \Laravel\Forge\Resources\Monitor monitor(int $serverId, int $monitorId)
 * @method static \Laravel\Forge\Resources\Monitor createMonitor(int $serverId, array $data)
 * @method static void deleteMonitor(int $serverId, int $monitorId)
 * @method static \Laravel\Forge\Resources\NginxTemplate[] nginxTemplates(int $serverId)
 * @method static \Laravel\Forge\Resources\NginxTemplate nginxTemplate(int $serverId, int $templateId)
 * @method static \Laravel\Forge\Resources\NginxTemplate nginxDefaultTemplate(int $serverId)
 * @method static \Laravel\Forge\Resources\NginxTemplate createNginxTemplate(int $serverId, array $data, bool $wait = true)
 * @method static \Laravel\Forge\Resources\NginxTemplate updateNginxTemplate(int $serverId, int $templateId, array $data)
 * @method static void deleteNginxTemplate(int $serverId, int $templateId)
 * @method static \Laravel\Forge\Resources\Recipe[] recipes()
 * @method static \Laravel\Forge\Resources\Recipe recipe(string $recipeId)
 * @method static \Laravel\Forge\Resources\Recipe createRecipe(array $data)
 * @method static \Laravel\Forge\Resources\Recipe updateRecipe(string $recipeId, array $data)
 * @method static void deleteRecipe(string $recipeId)
 * @method static void runRecipe(string $recipeId, array $data)
 * @method static \Laravel\Forge\Resources\RedirectRule[] redirectRules(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\RedirectRule redirectRule(int $serverId, int $siteId, int $ruleId)
 * @method static \Laravel\Forge\Resources\RedirectRule createRedirectRule(int $serverId, int $siteId, array $data, bool $wait = true)
 * @method static void deleteRedirectRule(int $serverId, int $siteId, int $ruleId)
 * @method static \Laravel\Forge\Resources\SecurityRule[] securityRules(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\SecurityRule securityRule(int $serverId, int $siteId, int $ruleId)
 * @method static \Laravel\Forge\Resources\SecurityRule createSecurityRule(int $serverId, int $siteId, array $data, bool $wait = true)
 * @method static void deleteSecurityRule(int $serverId, int $siteId, int $ruleId)
 * @method static \Laravel\Forge\Resources\Server[] servers()
 * @method static \Laravel\Forge\Resources\Server server(string $serverId)
 * @method static \Laravel\Forge\Resources\Server createServer(array $data, bool $wait = false, int $timeout = 900)
 * @method static \Laravel\Forge\Resources\Server updateServer(string $serverId, array $data)
 * @method static void deleteServer(string $serverId)
 * @method static void revokeAccessToServer(string $serverId)
 * @method static void reconnectToServer(string $serverId)
 * @method static void reactivateToServer(string $serverId)
 * @method static void rebootServer(string $serverId)
 * @method static void rebootMysql(string $serverId)
 * @method static void stopMysql(string $serverId)
 * @method static void rebootPostgres(string $serverId)
 * @method static void stopPostgres(string $serverId)
 * @method static void rebootNginx(string $serverId)
 * @method static void stopNginx(string $serverId)
 * @method static void rebootPHP(string $serverId, array $data)
 * @method static void installBlackfire(string $serverId, array $data)
 * @method static void removeBlackfire(string $serverId)
 * @method static void installPapertrail(string $serverId, array $data)
 * @method static void removePapertrail(string $serverId)
 * @method static void enableOPCache(string $serverId)
 * @method static void disableOPCache(string $serverId)
 * @method static \Laravel\Forge\Resources\PHPVersion[] phpVersions(int $serverId)
 * @method static void installPHP(string $serverId, string $version)
 * @method static void updatePHP(string $serverId, string $version)
 * @method static \Laravel\Forge\Resources\Event[] events(string|null $serverId = null)
 * @method static \Laravel\Forge\Resources\SiteCommand executeSiteCommand(int $serverId, int $siteId, array $data)
 * @method static \Laravel\Forge\Resources\SiteCommand listCommandHistory(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\SiteCommand getSiteCommand(int $serverId, int $siteId, int $commandId)
 * @method static \Laravel\Forge\Resources\Site[] sites(int $serverId)
 * @method static \Laravel\Forge\Resources\Site site(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\Site createSite(int $serverId, array $data, bool $wait = true)
 * @method static \Laravel\Forge\Resources\Site updateSite(int $serverId, int $siteId, array $data)
 * @method static \Laravel\Forge\Resources\Site addSiteAliases(int $serverId, int $siteId, array $aliases)
 * @method static void refreshSiteToken(int $serverId, int $siteId)
 * @method static void deleteSite(int $serverId, int $siteId)
 * @method static string siteNginxFile(int $serverId, int $siteId)
 * @method static void updateSiteNginxFile(int $serverId, int $siteId, string $content)
 * @method static string siteEnvironmentFile(int $serverId, int $siteId)
 * @method static void updateSiteEnvironmentFile(int $serverId, int $siteId, string $content)
 * @method static void installGitRepositoryOnSite(int $serverId, int $siteId, array $data, bool $wait = true)
 * @method static void updateSiteGitRepository(int $serverId, int $siteId, array $data)
 * @method static void destroySiteGitRepository(int $serverId, int $siteId, bool $wait = true)
 * @method static array createSiteDeployKey(int $serverId, int $siteId)
 * @method static void destroySiteDeployKey(mixed $serverId, mixed $siteId)
 * @method static string siteDeploymentScript(int $serverId, int $siteId)
 * @method static void updateSiteDeploymentScript(int $serverId, int $siteId, string $content, bool $autoSource = false)
 * @method static void enableQuickDeploy(int $serverId, int $siteId)
 * @method static void disableQuickDeploy(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\Site deploySite(int $serverId, int $siteId, bool $wait = true)
 * @method static void resetDeploymentState(int $serverId, int $siteId)
 * @method static string siteDeploymentLog(int $serverId, int $siteId)
 * @method static string deploymentHistory(int $serverId, int $siteId)
 * @method static string deploymentHistoryDeployment(int $serverId, int $siteId, int $deploymentId)
 * @method static string deploymentHistoryOutput(int $serverId, int $siteId, int $deploymentId)
 * @method static void enableHipchatNotifications(int $serverId, int $siteId, array $data)
 * @method static void disableHipchatNotifications(int $serverId, int $siteId)
 * @method static void installWordPress(int $serverId, int $siteId, array $data)
 * @method static void removeWordPress(int $serverId, int $siteId)
 * @method static void installPhpMyAdmin(int $serverId, int $siteId, array $data)
 * @method static void removePhpMyAdmin(int $serverId, int $siteId)
 * @method static void changeSitePHPVersion(int $serverId, int $siteId, string $version)
 * @method static void updateNodeBalancingConfiguration(int $serverId, int $siteId, array $data)
 * @method static string siteLog(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\SSHKey[] keys(int $serverId)
 * @method static \Laravel\Forge\Resources\SSHKey sshKey(int $serverId, int $keyId)
 * @method static \Laravel\Forge\Resources\SSHKey createSSHKey(int $serverId, array $data, bool $wait = true)
 * @method static void deleteSSHKey(int $serverId, int $keyId)
 * @method static \Laravel\Forge\Resources\Webhook[] webhooks(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\Webhook webhook(int $serverId, int $siteId, int $webhookId)
 * @method static \Laravel\Forge\Resources\Webhook createWebhook(int $serverId, int $siteId, array $data)
 * @method static void deleteWebhook(int $serverId, int $siteId, int $webhookId)
 * @method static \Laravel\Forge\Resources\Worker[] workers(int $serverId, int $siteId)
 * @method static \Laravel\Forge\Resources\Worker worker(int $serverId, int $siteId, int $workerId)
 * @method static \Laravel\Forge\Resources\Worker createWorker(int $serverId, int $siteId, array $data, bool $wait = true)
 * @method static void deleteWorker(int $serverId, int $siteId, int $workerId)
 * @method static void restartWorker(int $serverId, int $siteId, int $workerId, bool $wait = true)
 * @method static mixed get(string $uri)
 * @method static mixed post(string $uri, array $payload = [])
 * @method static mixed put(string $uri, array $payload = [])
 * @method static mixed delete(string $uri, array $payload = [])
 * @method static mixed retry(int $timeout, callable $callback, int $sleep = 5)
 *
 * @see \Laravel\Forge\Forge
 */
class Forge extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return ForgeManager::class;
    }
}