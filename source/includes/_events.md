### Event_AntiLoginCmd

ログインコマンドの使用制限を行います。

| メソッド名 | イベント |
| - | - |
| onOPCommand | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiLoginCmd](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiLoginCmd.java)

### Event_AntiProblemCommand

迷惑コマンドの制限を行います。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiProblemCommand](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiProblemCommand.java)

### Event_AntiProblemTeleport

極端に遠い場所へのテレポートを禁止します。

| メソッド名 | イベント |
| - | - |
| onPlayerTeleportEvent | PlayerTeleportEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiProblemTeleport](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiProblemTeleport.java)

### Event_AntiTargetAllEntityCmd

全てのエンティティをターゲットとするコマンドの使用を禁止します。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiTargetAllEntityCmd](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiTargetAllEntityCmd.java)

### Event_AntiTeleportToNewPlayers

新規プレイヤーへのテレポートを規制します。

| メソッド名 | イベント |
| - | - |
| onTeleportCommand | TeleportCommandEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiTeleportToNewPlayers](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiTeleportToNewPlayers.java)

### Event_AntiTeleportToSpectator

スペクテイタープレイヤーへのテレポートを禁止します。

| メソッド名 | イベント |
| - | - |
| onTeleportCommand | TeleportCommandEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiTeleportToSpectator](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiTeleportToSpectator.java)

### Event_AntiWither

ウィザーの出現制限を行います。

| メソッド名 | イベント |
| - | - |
| CreatureSpawn | CreatureSpawnEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiWither](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiWither.java)

### Event_Antijaoium

jaoium制限に関する処理を行います。

| メソッド名 | イベント |
| - | - |
| OnPickup | EntityPickupItemEvent|
| InvClick | InventoryClickEvent|
| onPlayerItemHeldEvent | PlayerItemHeldEvent|
| onPlayerInteractEvent | PlayerInteractEvent|
| OnBlockDispenseEvent | BlockDispenseEvent|
| onProjectileLaunchEvent | ProjectileLaunchEvent|
| onPotionSplashEvent | PotionSplashEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_Antijaoium](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Antijaoium.java)

### Event_ChatBan

ChatBanに関する各種処理を行います。

| メソッド名 | イベント |
| - | - |
| OnEvent_LoginChatBanCheck | PlayerJoinEvent|
| onJoinClearCache | PlayerJoinEvent|
| onQuitClearCache | PlayerQuitEvent|
| onChat | AsyncChatEvent|
| onPlayerCommandPreprocessEvent | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_ChatBan](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ChatBan.java)

### Event_ClearSelection

走りながら空気をクリックして/selを実行します。

| メソッド名 | イベント |
| - | - |
| onAirClick | PlayerInteractEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_ClearSelection](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ClearSelection.java)

### Event_CmdLengthLimiter

Default権限グループのプレイヤーによる100文字を超えるコマンドの実行を制限します。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_CmdLengthLimiter](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_CmdLengthLimiter.java)

### Event_CommandSendAM

実行されたコマンドをAdminとModeratorに通知します。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_CommandSendAM](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_CommandSendAM.java)

### Event_CustomJoinMessage

独自のログインメッセージを表示するように制御します。

| メソッド名 | イベント |
| - | - |
| onEvent_JoinChangeMessage | PlayerJoinEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_CustomJoinMessage](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_CustomJoinMessage.java)

### Event_DVNotSpectator

DefaultとVerified権限グループのプレイヤーによるスペクテイター変更を禁止します。

| メソッド名 | イベント |
| - | - |
| onChangeGameMode | PlayerGameModeChangeEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_DVNotSpectator](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DVNotSpectator.java)

### Event_Ded

dedコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onPlayerDeathEvent | PlayerDeathEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_Ded](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Ded.java)

### Event_DisableConcreteTransition

コンクリートパウダーの変化を無効化します。

| メソッド名 | イベント |
| - | - |
| onBlockFormEvent | BlockFormEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_DisableConcreteTransition](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DisableConcreteTransition.java)

### Event_DisableCoralTransition

サンゴの変化を無効化します。

| メソッド名 | イベント |
| - | - |
| onBlockFadeEvent | BlockFadeEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_DisableCoralTransition](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DisableCoralTransition.java)

### Event_DisableRespawnAnchor

リスポーンアンカーの爆発を無効化します。

| メソッド名 | イベント |
| - | - |
| onInteract | PlayerInteractEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_DisableRespawnAnchor](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DisableRespawnAnchor.java)

### Event_EBan

EBanに関する各種処理を行います。

| メソッド名 | イベント |
| - | - |
| onJoinClearCache | PlayerJoinEvent|
| onPlayerCommandPreprocessEvent | PlayerCommandPreprocessEvent|
| OnEvent_LoginEBanCheck | PlayerJoinEvent|
| onEvent_ChatLiquidBounce | AsyncChatEvent|
| onBlockPlaceEvent | BlockPlaceEvent|
| onBlockBreakEvent | BlockBreakEvent|
| onBlockIgniteEvent | BlockIgniteEvent|
| onPlayerBucketEmptyEvent | PlayerBucketEmptyEvent|
| onPlayerBucketFillEvent | PlayerBucketFillEvent|
| onPlayerPickupItemEvent | EntityPickupItemEvent|
| onPlayerDropItemEvent | PlayerDropItemEvent|
| onProjectileLaunchEvent | ProjectileLaunchEvent|
| onPlayerRespawnEvent | PlayerRespawnEvent|
| onPlayerMoveEvent | PlayerMoveEvent|
| onPotionSplashEvent | PotionSplashEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_EBan](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_EBan.java)

### Event_Explosion

TNTなどの爆発時に額縁や絵画などが壊れないようにします。

| メソッド名 | イベント |
| - | - |
| onHangingDamageByTNT | HangingBreakEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_Explosion](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Explosion.java)

### Event_FirstLogin

初めてログインしたプレイヤーを通知します。

| メソッド名 | イベント |
| - | - |
| OnEvent_FirstLogin | PlayerJoinEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_FirstLogin](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_FirstLogin.java)

### Event_GameModeCmd

hideコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onGameModeCommand | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_GameModeCmd](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_GameModeCmd.java)

### Event_Hide

hideコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onAsyncPlayerChatEvent | AsyncChatEvent|
| onPlayerJoinEvent | PlayerJoinEvent|
| onCommand | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_Hide](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Hide.java)

### Event_History

historyコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| OnEvent_JoinHistory | PlayerJoinEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_History](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_History.java)

### Event_Jail

Jailに関する各種処理を行います。

| メソッド名 | イベント |
| - | - |
| onJoinClearCache | PlayerJoinEvent|
| onPlayerCommandPreprocessEvent | PlayerCommandPreprocessEvent|
| onBlockPlaceEvent | BlockPlaceEvent|
| onBlockBreakEvent | BlockBreakEvent|
| onBlockIgniteEvent | BlockIgniteEvent|
| onPlayerBucketEmptyEvent | PlayerBucketEmptyEvent|
| onPlayerBucketFillEvent | PlayerBucketFillEvent|
| onPlayerPickupItemEvent | EntityPickupItemEvent|
| onPlayerDropItemEvent | PlayerDropItemEvent|
| onProjectileLaunchEvent | ProjectileLaunchEvent|
| OnEvent_LoginJailCheck | PlayerJoinEvent|
| onPlayerRespawnEvent | PlayerRespawnEvent|
| onPlayerMoveEvent | PlayerMoveEvent|
| onPotionSplashEvent | PotionSplashEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_Jail](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Jail.java)

### Event_LoginSuccessful

ログインに成功したことをデータベースに書き込みます。

| メソッド名 | イベント |
| - | - |
| OnJoin | PlayerJoinEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_LoginSuccessful](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_LoginSuccessful.java)

### Event_Looking

lookingコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onMove | PlayerMoveEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_Looking](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Looking.java)

### Event_MCBansLoginCheck

ログイン時、MCBansのキャッシュデータベースを確認しGBanされていたりReputationが足りなくないかを確認します。

| メソッド名 | イベント |
| - | - |
| OnLoginAfterCheck | PlayerJoinEvent|
| OnLoginCheck | AsyncPlayerPreLoginEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_MCBansLoginCheck](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_MCBansLoginCheck.java)

### Event_ManageCPPerms

CoreProtectのパーミッションノードを管理します。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_ManageCPPerms](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ManageCPPerms.java)

### Event_NewPlayerAutoBlMap

新規プレイヤーがログアウトした際にブロック編集情報を通知します。

| メソッド名 | イベント |
| - | - |
| OnEvent_Quit | PlayerQuitEvent|
| OnEvent_FirstLogin | PlayerJoinEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_NewPlayerAutoBlMap](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_NewPlayerAutoBlMap.java)

### Event_PlayerCheckPreLogin

プレイヤーログイン前に各種チェック等を行います。

| メソッド名 | イベント |
| - | - |
| OnEvent_PlayerCheckPreLogin | AsyncPlayerPreLoginEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_PlayerCheckPreLogin](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_PlayerCheckPreLogin.java)

### Event_ProtectionSandBox

SandBoxをRegular権限グループ未満のプレイヤーが編集できないように制限します。

| メソッド名 | イベント |
| - | - |
| onDamageArmorStand | EntityDamageByEntityEvent|
| onSandBoxBucketFillEvent | PlayerBucketFillEvent|
| ontoSandBox | PlayerChangedWorldEvent|
| onSandBoxPlace | BlockPlaceEvent|
| onSandBoxBreak | BlockBreakEvent|
| onSandBoxIgniteEvent | BlockIgniteEvent|
| onSandBoxBucketEmptyEvent | PlayerBucketEmptyEvent|
| onInteractRight | PlayerInteractEvent|
| onInteractLeft | PlayerInteractEvent|
| onProjectileLaunchEvent | ProjectileLaunchEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_ProtectionSandBox](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ProtectionSandBox.java)

### Event_SKKColor

チャット欄に表示される四角色に関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onEvent_JoinTabReload | PlayerJoinEvent|
| onEvent_ChatSKK | AsyncPlayerChatEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_SKKColor](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_SKKColor.java)

### Event_TeleportCmd

tpコマンドを受けてTeleportCommandEventを動作させます。

| メソッド名 | イベント |
| - | - |
| onTeleportCommandFromPlayer | PlayerCommandPreprocessEvent|
| onTeleportCommandFromNonPlayer | ServerCommandEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_TeleportCmd](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_TeleportCmd.java)

### Event_TempMute

tempmuteコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onChat | AsyncChatEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_TempMute](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_TempMute.java)

### Event_TpDeny

tpdenyコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onTeleportCommand | TeleportCommandEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_TpDeny](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_TpDeny.java)

### Event_Vote

各サーバリストサイトからの投票通知を受け取り、処理します。

| メソッド名 | イベント |
| - | - |
| onVotifierEvent | VotifierEvent|
> ソースコード: [com.jaoafa.mymaid4.event.Event_Vote](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Vote.java)
