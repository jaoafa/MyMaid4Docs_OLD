### Event_AntiEndPortal

エンドポータルの作成を制限します。

| メソッド名 | イベント |
| - | - |
| onInteract | PlayerInteractEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiEndPortal](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiEndPortal.java)

### Event_AntiKillWireUnit

wireコマンドで出現させたコウモリのキルを無効化します。

| メソッド名 | イベント |
| - | - |
| EntityDamageByEntity | EntityDeathEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiKillWireUnit](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiKillWireUnit.java)

### Event_AntiProblemCommand

迷惑コマンドの制限を行います。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiProblemCommand](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiProblemCommand.java)

### Event_AntiProblemTeleport

極端に遠い場所へのテレポートを禁止します。

| メソッド名 | イベント |
| - | - |
| onPlayerTeleportEvent | PlayerTeleportEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiProblemTeleport](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiProblemTeleport.java)

### Event_AntiTNTCart

TNTカートを設置できないようにします。

| メソッド名 | イベント |
| - | - |
| onVehicleCreateEvent | VehicleCreateEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiTNTCart](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiTNTCart.java)

### Event_AntiTargetAllEntityCmd

全てのエンティティをターゲットとするコマンドの使用を禁止します。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiTargetAllEntityCmd](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiTargetAllEntityCmd.java)

### Event_AntiTeleportToNewPlayers

新規プレイヤーへのテレポートを規制します。

| メソッド名 | イベント |
| - | - |
| onTeleportCommand | TeleportCommandEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiTeleportToNewPlayers](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiTeleportToNewPlayers.java)

### Event_AntiTeleportToSpectator

スペクテイタープレイヤーへのテレポートを禁止します。

| メソッド名 | イベント |
| - | - |
| onTeleportCommand | TeleportCommandEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiTeleportToSpectator](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiTeleportToSpectator.java)

### Event_AntiToolbar

ツールバーの利用を制限します。

| メソッド名 | イベント |
| - | - |
| onInventoryCreative | InventoryCreativeEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiToolbar](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiToolbar.java)

### Event_AntiWither

ウィザーの出現制限を行います。

| メソッド名 | イベント |
| - | - |
| CreatureSpawn | CreatureSpawnEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_AntiWither](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_AntiWither.java)

### Event_Antijaoium

jaoium制限に関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onProjectileLaunchEvent | ProjectileLaunchEvent |
| onPotionSplashEvent | PotionSplashEvent |
| onPlayerItemHeldEvent | PlayerItemHeldEvent |
| onPlayerInteractEvent | PlayerInteractEvent |
| PlayerCreativeInv | InventoryCreativeEvent |
| OnPickup | EntityPickupItemEvent |
| OnBlockDispenseEvent | BlockDispenseEvent |
| InvClick | InventoryClickEvent |
| ByPlayerCommand | PlayerCommandPreprocessEvent |
| ByItemPickup | EntityPickupItemEvent |
| ByCommandBlock | ServerCommandEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Antijaoium](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Antijaoium.java)

### Event_BlackList

アイテム・ブロックブラックリストに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onUseItem | UseItemEvent |
| onUseBlock | UseBlockEvent |
| onSpawnEntity | SpawnEntityEvent |
| onPlayerItemHeld | PlayerItemHeldEvent |
| onPlayerDropItem | PlayerDropItemEvent |
| onPlaceBlock | PlaceBlockEvent |
| onInventoryDrag | InventoryDragEvent |
| onInventoryCreative | InventoryCreativeEvent |
| onInventoryClick | InventoryClickEvent |
| onDestroyEntity | DestroyEntityEvent |
| onBreakBlock | BreakBlockEvent |
| onBlockDispenseArmor | BlockDispenseArmorEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_BlackList](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_BlackList.java)

### Event_Bug

bugコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onEditedBook | PlayerEditBookEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Bug](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Bug.java)

### Event_ChatBan

ChatBanに関する各種処理を行います。

| メソッド名 | イベント |
| - | - |
| onQuitClearCache | PlayerQuitEvent |
| onPlayerCommandPreprocessEvent | PlayerCommandPreprocessEvent |
| onJoinClearCache | PlayerJoinEvent |
| onChat | AsyncChatEvent |
| OnEvent_LoginChatBanCheck | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_ChatBan](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ChatBan.java)

### Event_ClearSelection

走りながら空気をクリックして/selを実行します。

| メソッド名 | イベント |
| - | - |
| onAirClick | PlayerInteractEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_ClearSelection](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ClearSelection.java)

### Event_CmdLengthLimiter

Default権限グループのプレイヤーによる100文字を超えるコマンドの実行を制限します。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_CmdLengthLimiter](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_CmdLengthLimiter.java)

### Event_CommandSendAM

実行されたコマンドをAdminとModeratorに通知します。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_CommandSendAM](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_CommandSendAM.java)

### Event_CustomJoinMessage

独自のログインメッセージを表示するように制御します。

| メソッド名 | イベント |
| - | - |
| onEvent_JoinChangeMessage | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_CustomJoinMessage](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_CustomJoinMessage.java)

### Event_DVNotSpectator

DefaultとVerified権限グループのプレイヤーによるスペクテイター変更を禁止します。

| メソッド名 | イベント |
| - | - |
| onChangeGameMode | PlayerGameModeChangeEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_DVNotSpectator](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DVNotSpectator.java)

### Event_Ded

dedコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onPlayerDeathEvent | PlayerDeathEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Ded](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Ded.java)

### Event_DedMessage

dedmessageコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onDeath | PlayerDeathEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_DedMessage](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DedMessage.java)

### Event_DisableConcreteTransition

コンクリートパウダーの変化を無効化します。

| メソッド名 | イベント |
| - | - |
| onBlockFormEvent | BlockFormEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_DisableConcreteTransition](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DisableConcreteTransition.java)

### Event_DisableCoralTransition

サンゴの変化を無効化します。

| メソッド名 | イベント |
| - | - |
| onBlockFadeEvent | BlockFadeEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_DisableCoralTransition](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DisableCoralTransition.java)

### Event_DisableKicks

不要なキックを無効化します。

| メソッド名 | イベント |
| - | - |
| onKick | PlayerKickEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_DisableKicks](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DisableKicks.java)

### Event_DisableRespawnAnchor

リスポーンアンカーの爆発を無効化します。

| メソッド名 | イベント |
| - | - |
| onInteract | PlayerInteractEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_DisableRespawnAnchor](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_DisableRespawnAnchor.java)

### Event_EBan

EBanに関する各種処理を行います。

| メソッド名 | イベント |
| - | - |
| onProjectileLaunchEvent | ProjectileLaunchEvent |
| onPotionSplashEvent | PotionSplashEvent |
| onPlayerRespawnEvent | PlayerRespawnEvent |
| onPlayerPickupItemEvent | EntityPickupItemEvent |
| onPlayerMoveEvent | PlayerMoveEvent |
| onPlayerDropItemEvent | PlayerDropItemEvent |
| onPlayerCommandPreprocessEvent | PlayerCommandPreprocessEvent |
| onPlayerBucketFillEvent | PlayerBucketFillEvent |
| onPlayerBucketEmptyEvent | PlayerBucketEmptyEvent |
| onJoinClearCache | PlayerJoinEvent |
| onEvent_ChatLiquidBounce | AsyncChatEvent |
| onBlockPlaceEvent | BlockPlaceEvent |
| onBlockIgniteEvent | BlockIgniteEvent |
| onBlockBreakEvent | BlockBreakEvent |
| OnEvent_LoginEBanCheck | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_EBan](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_EBan.java)

### Event_Explosion

TNTなどの爆発時に額縁や絵画などが壊れないようにします。

| メソッド名 | イベント |
| - | - |
| onHangingDamageByTNT | HangingBreakEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Explosion](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Explosion.java)

### Event_FirstLogin

初めてログインしたプレイヤーを通知します。

| メソッド名 | イベント |
| - | - |
| OnEvent_FirstLogin | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_FirstLogin](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_FirstLogin.java)

### Event_FlySpeed

flyspeedコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onSprint | PlayerToggleSprintEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_FlySpeed](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_FlySpeed.java)

### Event_GameModeCmd

hideコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onGameModeCommand | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_GameModeCmd](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_GameModeCmd.java)

### Event_Hide

hideコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onPlayerJoinEvent | PlayerJoinEvent |
| onCommand | PlayerCommandPreprocessEvent |
| onAsyncPlayerChatEvent | AsyncChatEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Hide](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Hide.java)

### Event_History

historyコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| OnEvent_JoinHistory | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_History](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_History.java)

### Event_Jail

Jailに関する各種処理を行います。

| メソッド名 | イベント |
| - | - |
| onQuit | PlayerQuitEvent |
| onProjectileLaunchEvent | ProjectileLaunchEvent |
| onPotionSplashEvent | PotionSplashEvent |
| onPlayerRespawnEvent | PlayerRespawnEvent |
| onPlayerPickupItemEvent | EntityPickupItemEvent |
| onPlayerMoveEvent | PlayerMoveEvent |
| onPlayerDropItemEvent | PlayerDropItemEvent |
| onPlayerCommandPreprocessEvent | PlayerCommandPreprocessEvent |
| onPlayerBucketFillEvent | PlayerBucketFillEvent |
| onPlayerBucketEmptyEvent | PlayerBucketEmptyEvent |
| onJoinClearCache | PlayerJoinEvent |
| onBlockPlaceEvent | BlockPlaceEvent |
| onBlockIgniteEvent | BlockIgniteEvent |
| onBlockBreakEvent | BlockBreakEvent |
| OnEvent_LoginJailCheck | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Jail](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Jail.java)

### Event_KillAfterRespawn

死亡してから3分後に自動的にリスポーンします。

| メソッド名 | イベント |
| - | - |
| onDeath | PlayerDeathEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_KillAfterRespawn](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_KillAfterRespawn.java)

### Event_LoginSuccessful

ログインに成功したことをデータベースに書き込みます。

| メソッド名 | イベント |
| - | - |
| OnJoin | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_LoginSuccessful](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_LoginSuccessful.java)

### Event_LongTimeNoSee

久々に来た人に「お久しぶりです」と伝えます。

| メソッド名 | イベント |
| - | - |
| OnJoin | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_LongTimeNoSee](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_LongTimeNoSee.java)

### Event_Looking

lookingコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onMove | PlayerMoveEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Looking](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Looking.java)

### Event_LookingBlock

「LookingBlock」が含まれるコマンドが実行された際に自動で見ているブロックのIDに置き換えます。

| メソッド名 | イベント |
| - | - |
| onSetHandFacingCommand | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_LookingBlock](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_LookingBlock.java)

### Event_MCBansLoginCheck

ログイン時、MCBansのキャッシュデータベースを確認しGBanされていたりReputationが足りなくないかを確認します。

| メソッド名 | イベント |
| - | - |
| OnLoginCheck | AsyncPlayerPreLoginEvent |
| OnLoginAfterCheck | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_MCBansLoginCheck](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_MCBansLoginCheck.java)

### Event_ManageCPPerms

CoreProtectのパーミッションノードを管理します。

| メソッド名 | イベント |
| - | - |
| onCommand | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_ManageCPPerms](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ManageCPPerms.java)

### Event_NewPlayerAutoBlMap

新規プレイヤーがログアウトした際にブロック編集情報を通知します。

| メソッド名 | イベント |
| - | - |
| OnEvent_Quit | PlayerQuitEvent |
| OnEvent_FirstLogin | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_NewPlayerAutoBlMap](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_NewPlayerAutoBlMap.java)

### Event_NotFadeIce

氷を解けなくします。

| メソッド名 | イベント |
| - | - |
| onBlockFadeEvent | BlockFadeEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_NotFadeIce](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_NotFadeIce.java)

### Event_NotifyKick

キックされた際にAdminとModeratorに理由を通知します。

| メソッド名 | イベント |
| - | - |
| onKick | PlayerKickEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_NotifyKick](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_NotifyKick.java)

### Event_NotifyTPDiscord

tpコマンドによるテレポート時にDiscord#server-chatでもそれを表示します。

| メソッド名 | イベント |
| - | - |
| onTeleportCommand | TeleportCommandEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_NotifyTPDiscord](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_NotifyTPDiscord.java)

### Event_OnlineTimeDB

ログイン時間を計測し、データベースに記録します。

| メソッド名 | イベント |
| - | - |
| OnEvent_QuitDBInsert | PlayerQuitEvent |
| OnEvent_LoginDBInsert | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_OnlineTimeDB](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_OnlineTimeDB.java)

### Event_PacketLimiterKick

PacketLimiterによるキック時に通知を行います。

| メソッド名 | イベント |
| - | - |
| onKick | PlayerKickEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_PacketLimiterKick](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_PacketLimiterKick.java)

### Event_PlayerCheckPreLogin

プレイヤーログイン前に各種チェック等を行います。

| メソッド名 | イベント |
| - | - |
| OnEvent_PlayerCheckPreLogin | AsyncPlayerPreLoginEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_PlayerCheckPreLogin](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_PlayerCheckPreLogin.java)

### Event_PlayerCountNotify

入退出時、プレイヤー数を表示します。

| メソッド名 | イベント |
| - | - |
| onQuit | PlayerQuitEvent |
| onJoin | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_PlayerCountNotify](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_PlayerCountNotify.java)

### Event_ProtectionOldWorlds

旧ワールドへの干渉禁止処理を行います。

| メソッド名 | イベント |
| - | - |
| onPlayerInteractEvent | PlayerInteractEvent |
| onPlayerBucketFillEvent | PlayerBucketFillEvent |
| onPlayerBucketEmptyEvent | PlayerBucketEmptyEvent |
| onBlockPlaceEvent | BlockPlaceEvent |
| onBlockIgniteEvent | BlockIgniteEvent |
| onBlockBreakEvent | BlockBreakEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_ProtectionOldWorlds](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ProtectionOldWorlds.java)

### Event_ProtectionSandBox

SandBoxをRegular権限グループ未満のプレイヤーが編集できないように制限します。

| メソッド名 | イベント |
| - | - |
| ontoSandBox | PlayerChangedWorldEvent |
| onSandBoxPlace | BlockPlaceEvent |
| onSandBoxIgniteEvent | BlockIgniteEvent |
| onSandBoxBucketFillEvent | PlayerBucketFillEvent |
| onSandBoxBucketEmptyEvent | PlayerBucketEmptyEvent |
| onSandBoxBreak | BlockBreakEvent |
| onProjectileLaunchEvent | ProjectileLaunchEvent |
| onInteractRight | PlayerInteractEvent |
| onInteractLeft | PlayerInteractEvent |
| onDamageArmorStand | EntityDamageByEntityEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_ProtectionSandBox](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ProtectionSandBox.java)

### Event_SKKColor

チャット欄に表示される四角色に関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onEvent_JoinTabReload | PlayerJoinEvent |
| onEvent_ChatSKK | AsyncChatEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_SKKColor](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_SKKColor.java)

### Event_Set43

set 43コマンドを従来の動作に戻します。

| メソッド名 | イベント |
| - | - |
| onTeleportCommandFromPlayer | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Set43](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Set43.java)

### Event_Sign

signコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onInteract | PlayerInteractEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Sign](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Sign.java)

### Event_TabList

Tabで表示されるヘッダー・フッターに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onQuit | PlayerQuitEvent |
| onJoin | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_TabList](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_TabList.java)

### Event_TeleportCmd

tpコマンドを受けてTeleportCommandEventを動作させます。

| メソッド名 | イベント |
| - | - |
| onTeleportCommandFromPlayer | PlayerCommandPreprocessEvent |
| onTeleportCommandFromNonPlayer | ServerCommandEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_TeleportCmd](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_TeleportCmd.java)

### Event_TempMute

tempmuteコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onChat | AsyncChatEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_TempMute](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_TempMute.java)

### Event_TpDeny

tpdenyコマンドに関する処理を行います。

| メソッド名 | イベント |
| - | - |
| onTeleportCommand | TeleportCommandEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_TpDeny](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_TpDeny.java)

### Event_ViaVerCheck

サーババージョン以外でのバージョンでログインした際に通知を表示します。

| メソッド名 | イベント |
| - | - |
| OnPlayerJoin | PlayerJoinEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_ViaVerCheck](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_ViaVerCheck.java)

### Event_Vote

各サーバリストサイトからの投票通知を受け取り、処理します。

| メソッド名 | イベント |
| - | - |
| onVotifierEvent | VotifierEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_Vote](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_Vote.java)

### Event_WorldEditAutoFacing

「[facing=look]」が含まれるコマンドが実行された際に自動で向いている方向に置き換えます。

| メソッド名 | イベント |
| - | - |
| onSetHandFacingCommand | PlayerCommandPreprocessEvent |
> ソースコード: [com.jaoafa.mymaid4.event.Event_WorldEditAutoFacing](https://github.com/jaoafa/MyMaid4/blob/master/src/main/java/com/jaoafa/mymaid4/event/Event_WorldEditAutoFacing.java)
