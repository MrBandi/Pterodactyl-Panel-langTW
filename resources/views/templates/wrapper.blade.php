@php
    use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Client\BlueprintClientLibrary as BlueprintExtensionLibrary;
    $settings = app()->make('Pterodactyl\Contracts\Repository\SettingsRepositoryInterface');
    $blueprint = app()->make(BlueprintExtensionLibrary::class, ['settings' => $settings]);
@endphp
<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name', 'Pterodactyl') }}</title>

        @yield('head')

        @section('meta')
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="robots" content="noindex">
            <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
            <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
            <link rel="manifest" href="/favicons/manifest.json">
            <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#bc6e3c">
            <link rel="shortcut icon" href="/favicons/favicon.ico">
            <meta name="msapplication-config" content="/favicons/browserconfig.xml">
            <meta name="theme-color" content="#0e4688">
        @show

        @section('user-data')
            @if(!is_null(Auth::user()))
                <script>
                    window.PterodactylUser = {!! json_encode(Auth::user()->toVueObject()) !!};
                </script>
            @endif
            @if(!empty($siteConfiguration))
                <script>
                    window.SiteConfiguration = {!! json_encode($siteConfiguration) !!};
                </script>
            @endif
        @show
        <style>
            @import url('//fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap');
            @import url('//fonts.googleapis.com/css?family=IBM+Plex+Mono|IBM+Plex+Sans:500&display=swap');
        </style>

        @yield('assets')

        @include('layouts.scripts')
    </head>
    <body class="{{ $css['body'] ?? 'bg-neutral-50' }}">
        @section('content')
            @yield('above-container')
            @yield('container')
            @yield('below-container')

            <!--
                Blueprint extensions containing dashboard wrappers
                will have their wrapper code injected here.
            -->

            <!-- wrapper:insert -->
<!--␀nebula:start␀-->
<?php
  $n_sidebar_home = $blueprint->dbGet("nebula", "sidebar_home");
  $n_sidebar_admin = $blueprint->dbGet("nebula", "sidebar_admin");
  $n_sidebar_account = $blueprint->dbGet("nebula", "sidebar_account");
  $n_sidebar_logout = $blueprint->dbGet("nebula", "sidebar_logout");
  $n_sidebar_server_terminal = $blueprint->dbGet("nebula", "sidebar_server_terminal");
  $n_sidebar_server_files = $blueprint->dbGet("nebula", "sidebar_server_files");
  $n_sidebar_server_databases = $blueprint->dbGet("nebula", "sidebar_server_databases");
  $n_sidebar_server_schedules = $blueprint->dbGet("nebula", "sidebar_server_schedules");
  $n_sidebar_server_users = $blueprint->dbGet("nebula", "sidebar_server_users");
  $n_sidebar_server_backups = $blueprint->dbGet("nebula", "sidebar_server_backups");
  $n_sidebar_server_network = $blueprint->dbGet("nebula", "sidebar_server_network");
  $n_sidebar_server_startup = $blueprint->dbGet("nebula", "sidebar_server_startup");
  $n_sidebar_server_settings = $blueprint->dbGet("nebula", "sidebar_server_settings");
  $n_sidebar_server_activity = $blueprint->dbGet("nebula", "sidebar_server_activity");
  $n_sidebar_server_more = $blueprint->dbGet("nebula", "sidebar_server_more");
  $n_sidebar_account_account = $blueprint->dbGet('nebula', 'sidebar_account_account');
  $n_sidebar_account_api = $blueprint->dbGet('nebula', 'sidebar_account_api');
  $n_sidebar_account_ssh = $blueprint->dbGet('nebula', 'sidebar_account_ssh');
  $n_sidebar_account_activity = $blueprint->dbGet('nebula', 'sidebar_account_activity');
  $n_icon_scale = $blueprint->dbGet("nebula", "icon_scale");
  $n_watermark = $blueprint->dbGet("nebula", "watermark");
  $n_init = $blueprint->dbGet("nebula", "init");
  $n_background_image = $blueprint->dbGet("nebula", "background_image");
  $n_sidebar_background = $blueprint->dbGet("nebula", "sidebar_background");
  $n_content_background = $blueprint->dbGet("nebula", "content_background");
  $n_background_appearance = $blueprint->dbGet("nebula", "background_appearance");
  $n_auth_background_image = $blueprint->dbGet("nebula", "auth_background_image");
  $n_auth_background_appearance = $blueprint->dbGet("nebula", "auth_background_appearance");
  $n_palette_dashboard_1 = $blueprint->dbGet("nebula", "palette_dashboard_1");
  $n_palette_dashboard_2 = $blueprint->dbGet("nebula", "palette_dashboard_2");
  $n_palette_dashboard_3 = $blueprint->dbGet("nebula", "palette_dashboard_3");
  $n_palette_dashboard_4 = $blueprint->dbGet("nebula", "palette_dashboard_4");
  $n_palette_dashboard_5 = $blueprint->dbGet("nebula", "palette_dashboard_5");
  $n_palette_dashboard_6 = $blueprint->dbGet("nebula", "palette_dashboard_6");
  $n_palette_dashboard_7 = $blueprint->dbGet("nebula", "palette_dashboard_7");
  $n_palette_dashboard_8 = $blueprint->dbGet("nebula", "palette_dashboard_8");
  $n_palette_dashboard_9 = $blueprint->dbGet("nebula", "palette_dashboard_9");
  $n_palette_sidebar_1 = $blueprint->dbGet("nebula", "palette_sidebar_1");
  $n_palette_sidebar_2 = $blueprint->dbGet("nebula", "palette_sidebar_2");
  $n_palette_sidebar_3 = $blueprint->dbGet("nebula", "palette_sidebar_3");
  $n_palette_sidebar_4 = $blueprint->dbGet("nebula", "palette_sidebar_4");
  $n_palette_sidebar_5 = $blueprint->dbGet("nebula", "palette_sidebar_5");
  $n_palette_sidebar_6 = $blueprint->dbGet("nebula", "palette_sidebar_6");
  $n_palette_sidebar_7 = $blueprint->dbGet("nebula", "palette_sidebar_7");
  $n_palette_sidebar_8 = $blueprint->dbGet("nebula", "palette_sidebar_8");
  $n_palette_auth_1 = $blueprint->dbGet("nebula", "palette_auth_1");
  $n_palette_auth_2 = $blueprint->dbGet("nebula", "palette_auth_2");
  $n_palette_auth_3 = $blueprint->dbGet("nebula", "palette_auth_3");
  $n_palette_auth_4 = $blueprint->dbGet("nebula", "palette_auth_4");
  $n_palette_auth_5 = $blueprint->dbGet("nebula", "palette_auth_5");
  $n_keyboard_shortcuts = $blueprint->dbGet("nebula", "keyboard_shortcuts");
  $n_keybind_icons = $blueprint->dbGet("nebula", "keybind_icons");
  $n_sidebar_hover_tooltip = $blueprint->dbGet("nebula", "sidebar_hover_tooltip");
  $n_server_overview_graphs = $blueprint->dbGet("nebula", "server_overview_graphs");
  $n_server_colored_power = $blueprint->dbGet("nebula", "server_colored_power");
  $n_sidebar_always_visible_buttons = $blueprint->dbGet("nebula", "sidebar_always_visible_buttons");
  $n_icon_fallback = $blueprint->dbGet("nebula", "icon_fallback");
  $n_dashboard_transparency = $blueprint->dbGet("nebula", "dashboard_transparency");
?>
<script>
  console.log("nebula#~ wrapper.blade.php")

  setTimeout(() => {
    console.debug("%c"+
      "\nIdentifier:   %cnebula"+
    "\n%cVersion:      %c1.6.3"+
    "\n%cBlueprint:    %calpha-NLM"+
    "\n%cAuthor:       %cprplwtf"+
    "\n%cPath:         %c/var/www/pterodactyl"+
    "\n%cData:         %c/var/www/pterodactyl/.blueprint/extensions/nebula/private"+
    "\n%cPublic:       %c/var/www/pterodactyl/.blueprint/extensions/nebula/public"+
    "\n%cType:         %cnormal"+
    "\n%cTimestamp:    %c1707742674"+
      "\n ",

      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
      'color: #3bb4f9; font-weight: 900',
      'color: #168cf4; font-weight: 500',
    );
  }, 5000);
</script>


<!-- Import scripts. -->
@if(Auth::check())
  <script src="/extensions/nebula/libraries/locationchange.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/fetchStyle.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/fetchScript.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/currentPage.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/fetchServerId.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/statusOrb.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/customContextMenu.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/copyapi.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/assignElementIds.js?1707742674"></script>
  <script src="/extensions/nebula/libraries/fileMode.js?1707742674"></script>
  @if($n_keyboard_shortcuts == "1")<script src="/extensions/nebula/libraries/keybinds.js?1707742674"></script>@endif
  @if($n_keyboard_shortcuts == "1")<script src="/extensions/nebula/libraries/keybindsModal.js?1707742674"></script>@endif
  @if($n_sidebar_hover_tooltip == "2")<script src="/extensions/nebula/libraries/sidebarTooltipAligned.js?1707742674"></script>@endif
@endif
  
<!-- Import stylesheets. -->
<style> @import url("/extensions/nebula/libraries/statusOrb.css?1707742674"); </style>
<style> @import url("/extensions/nebula/libraries/fixUserInterfaceBugs.css?1707742674"); </style>
<style> @import url("/extensions/nebula/libraries/customContextMenu.css?1707742674"); </style>
<style> @import url("/extensions/nebula/libraries/betterServerList.css?1707742674"); </style>
<style> @import url("/extensions/nebula/libraries/fileMode.css?1707742674"); </style>
@if($n_keyboard_shortcuts == "1")<style> @import url("/extensions/nebula/libraries/keybindsModal.css?1707742674"); </style>@endif
@if($n_server_overview_graphs == "0")<style> @import url("/extensions/nebula/libraries/hideServerOverviewGraphs.css?1707742674"); </style>@endif
@if($n_dashboard_transparency != "0")<style> @import url("/extensions/nebula/libraries/transparentUI.css?1707742674"); </style>@endif
@if($n_sidebar_hover_tooltip == "1")<style> @import url("/extensions/nebula/libraries/sidebarTooltip.css?1707742674"); </style>@endif
@if($n_sidebar_hover_tooltip == "2")<style> @import url("/extensions/nebula/libraries/sidebarTooltipAligned.css?1707742674"); </style>@endif

<style>                                          @import url("https://cdn.nebula.style/icons/bootstrap/bootstrap-icons.css"); </style>
@if($n_icon_fallback == "feather")<style>        @import url("https://cdn.nebula.style/icons/feather/feather-icons.css"); </style>@endif
@if($n_icon_fallback == "lucide")<style>         @import url("https://cdn.nebula.style/icons/lucide/lucide.css"); </style>@endif
@if($n_icon_fallback == "material")<style>       @import url("https://cdn.nebula.style/icons/materialdesign/default/materialdesignicons.css"); </style>@endif
@if($n_icon_fallback == "material-light")<style> @import url("https://cdn.nebula.style/icons/materialdesign/light/materialdesignicons-light.css"); </style>@endif
@if($n_icon_fallback == "fontawesome")<style>    @import url("https://cdn.nebula.style/icons/fontawesome/fontawesome.css"); </style>@endif
@if($n_icon_fallback == "eva-outline")<style>    @import url("https://cdn.nebula.style/icons/eva/evaicons.css"); </style>@endif
@if($n_icon_fallback == "eva-solid")<style>      @import url("https://cdn.nebula.style/icons/eva/evaicons.css"); </style>@endif
@if($n_icon_fallback == "remix-outline")<style>  @import url("https://cdn.nebula.style/icons/remix/remixicon.css"); </style>@endif
@if($n_icon_fallback == "remix-solid")<style>    @import url("https://cdn.nebula.style/icons/remix/remixicon.css"); </style>@endif

@if($n_init != "")
@if(Auth::check())
@if($n_watermark == "1")
<p class="nebulaFooter"><i style="font-size:12px; margin-right: 3px;" class="sidebarIcon bi bi-exclude"></i> Powered by Nebula.</p>
@endif
<div class="fixed-background"></div>
<div id="sidebar" class="sidebar">
  <?php 
    if($n_icon_fallback == "bootstrap") {

      // BOOTSTRAP
      $__SCALE = "30px";
      $__home             = "bi bi-exclude";
      $__admin            = "bi bi-gear-wide-connected";
      $__account          = "bi bi-person-fill-gear";
      $__logout           = "bi bi-box-arrow-right";
      $__server_terminal  = "bi bi-terminal";
      $__server_files     = "bi bi-folder2";
      $__server_databases = "bi bi-database";
      $__server_schedules = "bi bi-calendar-week";
      $__server_users     = "bi bi-people";
      $__server_backups   = "bi bi-disc";
      $__server_network   = "bi bi-hdd-network";
      $__server_startup   = "bi bi-plug";
      $__server_settings  = "bi bi-gear";
      $__server_activity  = "bi bi-clipboard-pulse";
      $__account_account  = "bi bi-person-badge";
      $__account_api      = "bi bi-braces-asterisk";
      $__account_ssh      = "bi bi-key";
      $__account_activity = "bi bi-clipboard-pulse";

    } elseif($n_icon_fallback == "feather") {

      // FEATHER
      $__SCALE = "32px";
      $__home             = "ff ff-home";
      $__admin            = "ff ff-sliders";
      $__account          = "ff ff-user";
      $__logout           = "ff ff-log-out";
      $__server_terminal  = "ff ff-terminal";
      $__server_files     = "ff ff-folder";
      $__server_databases = "ff ff-database";
      $__server_schedules = "ff ff-calendar";
      $__server_users     = "ff ff-users";
      $__server_backups   = "ff ff-disc";
      $__server_network   = "ff ff-globe";
      $__server_startup   = "ff ff-hard-drive";
      $__server_settings  = "ff ff-settings";
      $__server_activity  = "ff ff-activity";
      $__account_account  = "ff ff-settings";
      $__account_api      = "ff ff-link";
      $__account_ssh      = "ff ff-key";
      $__account_activity = "ff ff-activity";

    } elseif($n_icon_fallback == "lucide") {

      // LUCIDE
      $__SCALE = "32px";
      $__home             = "icon-layers";
      $__admin            = "icon-sliders-horizontal";
      $__account          = "icon-user";
      $__logout           = "icon-log-out";
      $__server_terminal  = "icon-terminal-square";
      $__server_files     = "icon-folder-open";
      $__server_databases = "icon-database";
      $__server_schedules = "icon-calendar-clock";
      $__server_users     = "icon-users";
      $__server_backups   = "icon-archive";
      $__server_network   = "icon-network";
      $__server_startup   = "icon-unplug";
      $__server_settings  = "icon-settings";
      $__server_activity  = "icon-scroll-text";
      $__account_account  = "icon-settings";
      $__account_api      = "icon-globe";
      $__account_ssh      = "icon-key";
      $__account_activity = "icon-scroll-text";

    } elseif($n_icon_fallback == "material") {

      // MATERIAL
      $__SCALE = "37px";
      $__home             = "mdi mdi-home";
      $__admin            = "mdi mdi-hammer-wrench";
      $__account          = "mdi mdi-account-edit";
      $__logout           = "mdi mdi-logout";
      $__server_terminal  = "mdi mdi-console-line";
      $__server_files     = "mdi mdi-folder";
      $__server_databases = "mdi mdi-database";
      $__server_schedules = "mdi mdi-calendar-month";
      $__server_users     = "mdi mdi-account-group";
      $__server_backups   = "mdi mdi-backup-restore";
      $__server_network   = "mdi mdi-network";
      $__server_startup   = "mdi mdi-cog-play";
      $__server_settings  = "mdi mdi-wrench-cog";
      $__server_activity  = "mdi mdi-clipboard-pulse";
      $__account_account  = "mdi mdi-account-cog";
      $__account_api      = "mdi mdi-code-brackets";
      $__account_ssh      = "mdi mdi-key-chain";
      $__account_activity = "mdi mdi-clipboard-pulse";

    } elseif($n_icon_fallback == "material-light") {

      // MATERIAL-LIGHT
      $__SCALE = "37px";
      $__home             = "mdil mdil-home";
      $__admin            = "mdil mdil-view-dashboard";
      $__account          = "mdil mdil-account";
      $__logout           = "mdil mdil-logout";
      $__server_terminal  = "mdil mdil-console";
      $__server_files     = "mdil mdil-folder";
      $__server_databases = "mdil mdil-table";
      $__server_schedules = "mdil mdil-calendar";
      $__server_users     = "mdil mdil-eye";
      $__server_backups   = "mdil mdil-content-duplicate";
      $__server_network   = "mdil mdil-sitemap";
      $__server_startup   = "mdil mdil-pencil";
      $__server_settings  = "mdil mdil-settings";
      $__server_activity  = "mdil mdil-clipboard-text";
      $__account_account  = "mdil mdil-settings";
      $__account_api      = "mdil mdil-link";
      $__account_ssh      = "mdil mdil-lock";
      $__account_activity = "mdil mdil-clipboard-text";

    } elseif($n_icon_fallback == "fontawesome") {

      // FONTAWESOME
      $__SCALE = "28px";
      $__home             = "fa-solid fa-house";
      $__admin            = "fa-solid fa-sliders";
      $__account          = "fa-solid fa-user-gear";
      $__logout           = "fa-solid fa-right-from-bracket";
      $__server_terminal  = "fa-solid fa-bars-progress";
      $__server_files     = "fa-solid fa-folder";
      $__server_databases = "fa-solid fa-database";
      $__server_schedules = "fa-solid fa-calendar";
      $__server_users     = "fa-solid fa-user-group";
      $__server_backups   = "fa-solid fa-box-archive";
      $__server_network   = "fa-solid fa-network-wired";
      $__server_startup   = "fa-solid fa-wrench";
      $__server_settings  = "fa-solid fa-gear";
      $__server_activity  = "fa-solid fa-scroll";
      $__account_account  = "fa-solid fa-circle-user";
      $__account_api      = "fa-solid fa-globe";
      $__account_ssh      = "fa-solid fa-key";
      $__account_activity = "fa-solid fa-scroll";

    } elseif($n_icon_fallback == "eva-outline") {

      // EVA OUTLINE
      $__SCALE = "33px";
      $__home             = "eva eva-home-outline";
      $__admin            = "eva eva-options-outline";
      $__account          = "eva eva-person-outline";
      $__logout           = "eva eva-log-out-outline";
      $__server_terminal  = "eva eva-hard-drive-outline";
      $__server_files     = "eva eva-folder-outline";
      $__server_databases = "eva eva-cube-outline";
      $__server_schedules = "eva eva-calendar-outline";
      $__server_users     = "eva eva-people-outline";
      $__server_backups   = "eva eva-archive-outline";
      $__server_network   = "eva eva-wifi-outline";
      $__server_startup   = "eva eva-flash-outline";
      $__server_settings  = "eva eva-settings-outline";
      $__server_activity  = "eva eva-activity-outline";
      $__account_account  = "eva eva-settings-outline";
      $__account_api      = "eva eva-globe-outline";
      $__account_ssh      = "eva eva-lock-outline";
      $__account_activity = "eva eva-activity-outline";

    } elseif($n_icon_fallback == "eva-solid") {

      // EVA SOLID
      $__SCALE = "33px";
      $__home             = "eva eva-home";
      $__admin            = "eva eva-options";
      $__account          = "eva eva-person";
      $__logout           = "eva eva-log-out";
      $__server_terminal  = "eva eva-hard-drive";
      $__server_files     = "eva eva-folder";
      $__server_databases = "eva eva-cube";
      $__server_schedules = "eva eva-calendar";
      $__server_users     = "eva eva-people";
      $__server_backups   = "eva eva-archive";
      $__server_network   = "eva eva-wifi";
      $__server_startup   = "eva eva-flash";
      $__server_settings  = "eva eva-settings";
      $__server_activity  = "eva eva-activity";
      $__account_account  = "eva eva-settings";
      $__account_api      = "eva eva-globe";
      $__account_ssh      = "eva eva-lock";
      $__account_activity = "eva eva-activity";

    } elseif($n_icon_fallback == "remix-outline") {

      // REMIX DESIGN
      $__SCALE = "33px";
      $__home             = "ri-home-line";
      $__admin            = "ri-equalizer-3-line";
      $__account          = "ri-user-settings-line";
      $__logout           = "ri-logout-box-r-line";
      $__server_terminal  = "ri-terminal-box-line";
      $__server_files     = "ri-folder-6-line";
      $__server_databases = "ri-database-2-line";
      $__server_schedules = "ri-calendar-line";
      $__server_users     = "ri-group-line";
      $__server_backups   = "ri-archive-line";
      $__server_network   = "ri-arrow-up-down-line";
      $__server_startup   = "ri-edit-box-line";
      $__server_settings  = "ri-settings-line";
      $__server_activity  = "ri-pulse-line";
      $__account_account  = "ri-settings-line";
      $__account_api      = "ri-global-line";
      $__account_ssh      = "ri-key-2-line";
      $__account_activity = "ri-pulse-line";

    } elseif($n_icon_fallback == "remix-solid") {

      // REMIX DESIGN
      $__SCALE = "33px";
      $__home             = "ri-home-fill";
      $__admin            = "ri-equalizer-3-fill";
      $__account          = "ri-user-settings-fill";
      $__logout           = "ri-logout-box-r-fill";
      $__server_terminal  = "ri-terminal-box-fill";
      $__server_files     = "ri-folder-6-fill";
      $__server_databases = "ri-database-2-fill";
      $__server_schedules = "ri-calendar-fill";
      $__server_users     = "ri-group-fill";
      $__server_backups   = "ri-archive-fill";
      $__server_network   = "ri-arrow-up-down-fill";
      $__server_startup   = "ri-edit-box-fill";
      $__server_settings  = "ri-settings-fill";
      $__server_activity  = "ri-pulse-line";
      $__account_account  = "ri-settings-fill";
      $__account_api      = "ri-global-fill";
      $__account_ssh      = "ri-key-2-fill";
      $__account_activity = "ri-pulse-line";

    }
  ?>
  <div class="sidebarContentContainer">
    <div class="sidebarContent">
      
      <!-- Item: Home -->
      <div class="tooltip-toggle">
        <span class="tooltip">主頁</span>
        <button oncontextmenu="showContextMenu(event, `/`)" onclick="sidebarRefresh();sidebarButtonEvent('home')" id="sidebarMainHome" class="sidebarButton">
          @if($n_sidebar_home == "")
          <i class="sidebarIcon {{ $__home }}"></i>
          @else
          <img class="customicon" src="{{ $n_sidebar_home }}"></img>
          @endif
        </button>
      </div>

      <!-- Item: Spacer -->
      <div class="sidebarSpacer"></div>
      
      <!-- Category: Server Management -->
      <div id="sidebarCategoryServer" class="sidebarCategory">

        <!-- Item: Terminal -->
        <div class="tooltip-toggle">
          <span class="tooltip">Terminal</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}`)" onclick="sidebarRefresh();sidebarButtonEvent('serverTerminal')" id="sidebarServerTerminal" class="sidebarButton">
            @if($n_sidebar_server_terminal == "")
            <i class="sidebarIcon {{ $__server_terminal }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_terminal }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: File Manager -->
        <div class="tooltip-toggle">
          <span class="tooltip">Files</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/files`)" onclick="sidebarRefresh();sidebarButtonEvent('serverFiles')" id="sidebarServerFilemanager" class="sidebarButton">
            @if($n_sidebar_server_files == "")
            <i class="sidebarIcon {{ $__server_files }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_files }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Databases -->
        <div class="tooltip-toggle">
          <span class="tooltip">Databases</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/databases`)" onclick="sidebarRefresh();sidebarButtonEvent('serverDatabases')" id="sidebarServerDatabases" class="sidebarButton">
            @if($n_sidebar_server_databases == "")
            <i class="sidebarIcon {{ $__server_databases }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_databases }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Schedules -->
        <div class="tooltip-toggle">
          <span class="tooltip">Schedules</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/schedules`)" onclick="sidebarRefresh();sidebarButtonEvent('serverSchedules')" id="sidebarServerSchedules" class="sidebarButton">
            @if($n_sidebar_server_schedules == "")
            <i class="sidebarIcon {{ $__server_schedules }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_schedules }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Users -->
        <div class="tooltip-toggle">
          <span class="tooltip">Users</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/users`)" onclick="sidebarRefresh();sidebarButtonEvent('serverUsers')" id="sidebarServerUsers" class="sidebarButton">
            @if($n_sidebar_server_users == "")
            <i class="sidebarIcon {{ $__server_users }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_users }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Backups -->
        <div class="tooltip-toggle">
          <span class="tooltip">Backups</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/backups`)" onclick="sidebarRefresh();sidebarButtonEvent('serverBackups')" id="sidebarServerBackups" class="sidebarButton">
            @if($n_sidebar_server_backups == "")
            <i class="sidebarIcon {{ $__server_backups }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_backups }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Network -->
        <div class="tooltip-toggle">
          <span class="tooltip">Network</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/network`)" onclick="sidebarRefresh();sidebarButtonEvent('serverNetwork')" id="sidebarServerNetwork" class="sidebarButton">
            @if($n_sidebar_server_network == "")
            <i class="sidebarIcon {{ $__server_network }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_network }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Startup -->
        <div class="tooltip-toggle">
          <span class="tooltip">Startup</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/startup`)" onclick="sidebarRefresh();sidebarButtonEvent('serverStartup')" id="sidebarServerStartup" class="sidebarButton">
            @if($n_sidebar_server_startup == "")
            <i class="sidebarIcon {{ $__server_startup }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_startup }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Settings -->
        <div class="tooltip-toggle">
          <span class="tooltip">Settings</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/settings`)" onclick="sidebarRefresh();sidebarButtonEvent('serverSettings')" id="sidebarServerSettings" class="sidebarButton">
            @if($n_sidebar_server_settings == "")
            <i class="sidebarIcon {{ $__server_settings }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_settings }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Activity -->
        <div class="tooltip-toggle">
          <span class="tooltip">Activity</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/activity`)" onclick="sidebarRefresh();sidebarButtonEvent('serverActivity')" id="sidebarServerActivity" class="sidebarButton">
            @if($n_sidebar_server_activity == "")
            <i class="sidebarIcon {{ $__server_activity }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_activity }}"></img>
            @endif
          </button>
        </div>
        
        @if($n_sidebar_always_visible_buttons == "1")
        <!-- Item: Spacer -->
        <div class="sidebarSpacer"></div>
        @endif
        
      </div>
      
      <!-- Category: Account -->
      <div id="sidebarCategoryAccount" class="sidebarCategory">
        
        <!-- Item: Account -->
        <div class="tooltip-toggle">
          <span class="tooltip">Account</span>
          <button oncontextmenu="showContextMenu(event, `/account`)" onclick="sidebarRefresh();sidebarButtonEvent('accountAccount')" id="sidebarAccountAccount" class="sidebarButton">
            @if($n_sidebar_account_account == "")
            <i class="sidebarIcon {{ $__account_account }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_account_account }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: API Credentials -->
        <div class="tooltip-toggle">
          <span class="tooltip">API</span>
          <button oncontextmenu="showContextMenu(event, `/account/api`)" onclick="sidebarRefresh();sidebarButtonEvent('accountApi')" id="sidebarAccountApi" class="sidebarButton">
            @if($n_sidebar_account_api == "")
            <i class="sidebarIcon {{ $__account_api }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_account_api }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: SSH Keys -->
        <div class="tooltip-toggle">
          <span class="tooltip">SSH</span>
          <button oncontextmenu="showContextMenu(event, `/account/ssh`)" onclick="sidebarRefresh();sidebarButtonEvent('accountSsh')" id="sidebarAccountSsh" class="sidebarButton">
            @if($n_sidebar_account_ssh == "")
            <i class="sidebarIcon {{ $__account_ssh }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_account_ssh }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Activity -->
        <div class="tooltip-toggle">
          <span class="tooltip">Activity</span>
          <button oncontextmenu="showContextMenu(event, `/account/activity`)" onclick="sidebarRefresh();sidebarButtonEvent('accountActivity')" id="sidebarAccountActivity" class="sidebarButton">
            @if($n_sidebar_account_activity == "")
            <i class="sidebarIcon {{ $__account_activity }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_account_activity }}"></img>
            @endif
          </button>
        </div>
        
        @if($n_sidebar_always_visible_buttons == "1")
        <!-- Item: Spacer -->
        <div class="sidebarSpacer"></div>
        @endif
        
      </div>

      <!-- Category: General -->
      <div id="sidebarCategoryGeneral">

        @if(Auth::user()->root_admin == 1)
        <!-- Item: Configuration -->
        <a href="/admin">
          <div class="tooltip-toggle">
            <span class="tooltip">Admin</span>
            <button oncontextmenu="showContextMenu(event, `/admin`)" onclick="sidebarRefresh();sidebarButtonEvent('admin')" id="sidebarMainConfiguration" class="sidebarButton">
              @if($n_sidebar_admin == "")
              <i class="sidebarIcon {{ $__admin }}"></i>
              @else
              <img class="customicon" src="{{ $n_sidebar_admin }}"></img>
              @endif
            </button>
          </div>
        </a>
        @endif
        
        <!-- Item: Account -->
        <div class="tooltip-toggle">
          <span class="tooltip">Account</span>
          <button oncontextmenu="showContextMenu(event, `/account`)" onclick="sidebarRefresh();sidebarButtonEvent('accountAccount')" id="sidebarMainAccount" class="sidebarButton">
            @if($n_sidebar_account == "")
            <i class="sidebarIcon {{ $__account }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_account }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Log out -->
        <div class="tooltip-toggle">
          <span class="tooltip">Logout</span>
          <button oncontextmenu="return false;" onclick="sidebarRefresh();sidebarButtonEvent('logout')" id="sidebarMainLogout" class="sidebarButton">
            @if($n_sidebar_logout == "")
            <i class="sidebarIcon {{ $__logout }}"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_logout }}"></img>
            @endif
          </button>
        </div>
      
      </div> 
      
    </div>
  </div>
</div>

<!-- Sidebar Context Menu -->
<div id="nebulaContextMenu" class="context-container">
  <button id="nebulaContextButton" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/><path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/></svg>
    Open in new tab
  </button><br>
  <button id="nebulaContextButton2" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/></svg>
    Copy link
  </button><br>
</div>

<!-- Files Context Menu -->
<div id="filesContextMenu" class="context-container"><div id="filesItemLoader" class="item-loader"></div>
  <!-- Rename -->
  <button id="filesContextButton" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-cursor-text" viewBox="0 0 16 16"><path d="M5 2a.5.5 0 0 1 .5-.5c.862 0 1.573.287 2.06.566.174.099.321.198.44.286.119-.088.266-.187.44-.286A4.17 4.17 0 0 1 10.5 1.5a.5.5 0 0 1 0 1c-.638 0-1.177.213-1.564.434a3.5 3.5 0 0 0-.436.294V7.5H9a.5.5 0 0 1 0 1h-.5v4.272c.1.08.248.187.436.294.387.221.926.434 1.564.434a.5.5 0 0 1 0 1 4.17 4.17 0 0 1-2.06-.566A5 5 0 0 1 8 13.65a5 5 0 0 1-.44.285 4.17 4.17 0 0 1-2.06.566.5.5 0 0 1 0-1c.638 0 1.177-.213 1.564-.434.188-.107.335-.214.436-.294V8.5H7a.5.5 0 0 1 0-1h.5V3.228a3.5 3.5 0 0 0-.436-.294A3.17 3.17 0 0 0 5.5 2.5.5.5 0 0 1 5 2m2.648 10.645"/></svg>
    重新命名
  </button><br>
  <!-- Move -->
  <button id="filesContextButton2" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-arrows-move" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10M.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8"/></svg>
    移動
  </button><br>
  <!-- Permissions -->
  <button id="filesContextButton3" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16"><path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/><path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/></svg>
    權限
  </button><br>
  <!-- Duplicate (copy) -->
  <button id="filesContextButton4" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/></svg>
    複製
  </button><br>
  <!-- Archive -->
  <button id="filesContextButton5" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16"><path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/></svg>
    壓縮
  </button><br>
  <!-- Unarchive -->
  <button id="filesContextButton6" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16"><path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/></svg>
    解壓縮
  </button><br>
  <!-- Download -->
  <button id="filesContextButton7" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16"><path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/><path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/></svg>
    下載
  </button><br>
  <!-- Delete -->
  <button id="filesContextButton8" class="context-button context-button-danger">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/></svg>
    刪除
  </button><br>
</div>

@endif
<style id="nebula-components">

  #nebulaContextMenu,
  #filesContextMenu {
    display: none
  }

  .nebulaFooter {
    text-align: center;
    font-size: 12px;
    font-weight: 300;
    color: #9aa5b1;
    padding-bottom: 10px;
  }

  @if($n_sidebar_hover_tooltip == 0)
    span.tooltip { 
      display: none
    }
  @endif

  /* SIDEBAR */
  @if($n_sidebar_background == "default")
  .sidebar {
    transition: 
      left 0.5s,
      width 1s !important;
    position: fixed;
    left: 0; top: 0;
    width: 75px; height: 100%;
    background-color: var(--sidebarBackground);
    z-index: 5;
    border-radius: 0px 10px 10px 0px;
  }
  @elseif($n_sidebar_background == "blurred")
  .sidebar {
    transition: 
      left 0.5s,
      width 1s !important;
    position: fixed;
    left: 0; top: 0;
    width: 77px; height: 100%;
    background-color: #ffffff05;
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    z-index: 5;
    border-radius: 0px 10px 10px 0px;
  }
  @endif

  .sidebarContentContainer {
    margin: 10px 10px 10px 10px;
    height: calc(100% - 20px);
    overflow: auto;
    
    scrollbar-width: none;
    -ms-overflow-style: none;
    &::-webkit-scrollbar {
      display: none;
    }
  }

  .sidebarContent {
  }


  /* SIDEBAR ITEMS */
  .sidebarButton {
    border: none;
    @if($n_sidebar_background == "default")
    background-color: var(--sidebarSecondary);
    @elseif($n_sidebar_background == "blurred")
    background-color: #ffffff10;
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    @endif
    width: calc(75px - 10px - 10px);
    height: calc(75px - 10px - 10px);
    border-radius: 10px;
    margin-bottom: 10px;
    overflow-x: hidden;
    transition: 
      background-color 0.5s,
      width 1s,
      border 0.5s !important;
  }
  .sidebarButton:hover {
    @if($n_sidebar_background == "default")
    background-color: var(--sidebarSecondaryHover);
    @elseif($n_sidebar_background == "blurred")
    background-color: #ffffff20;
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    @endif
  }
  .sidebarButton:active {
    @if($n_sidebar_background == "default")
    background-color: var(--sidebarSecondaryActive);
    @elseif($n_sidebar_background == "blurred")
    background-color: #ffffff15;
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    @endif
  }

  .sidebarButtonSelected {
    @if($n_sidebar_background == "default")
    background-color: var(--sidebarButtonActive);
    @elseif($n_sidebar_background == "blurred")
    background-color: #ffffff15;
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    @endif
  }

  .sidebarIcon {
    @if($n_sidebar_background == "default")
    color: var(--sidebarPrimary);
    @elseif($n_sidebar_background == "blurred")
    color: #ffffff;
    opacity: 0.8;
    @endif
    transition:
      color 0.3s,
      opacity 0.3s !important;
    
    @if(Auth::check())
      font-size: calc({{ $__SCALE }} * {{ $n_icon_scale }});
    @endif
  }
  .sidebarIcon:hover {
    @if($n_sidebar_background == "default")
    color: var(--sidebarPrimaryHover);
    @elseif($n_sidebar_background == "blurred")
    color: #ffffff;
    opacity: 0.95;
    @endif
  }

  .customicon {
    width: 100%;
    height: 100%;
    scale: calc({{ $n_icon_scale }});
    @if($n_icon_scale == "1.00")border-radius: 10px;@endif
  }

  .sidebarSpacer {
    padding-top: 7px;
    padding-bottom: 5px;
    margin-left: 12.5%;
    margin-right: 12.5%;
    width: 75%;
    @if($n_sidebar_background == "default")
    border-top: 1px solid var(--sidebarSecondary);
    @elseif($n_sidebar_background == "blurred")
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    @endif
  }

  .sidebarCategory {
    display: none;
  }

  /* BODY */
  @if(Auth::check())

    @if($n_background_image == "")
    
      body, body.bg-neutral-800 {
        padding-left: 75px;
        color: #fff;
        background-color: var(--pageBackground);
      }

    @else

      body, body.bg-neutral-800 {
        padding-left: 75px;
        color: #fff;
        background-color: #00000000;
      }

    @endif

  @else

    body, bg-neutral-800 {
      color: #fff;
      background-color: var(--pageBackground);
    }

  @endif

  @if($n_background_image == "")

    html {
      background-color: var(--pageBackground);
    }

    .fixed-background {
      display: none;
    }

  @else

    html {
      background-color: #000000;
      z-index: -2;
    }

    .fixed-background {
      background: url("{{ $n_background_image }}") no-repeat;
      @if($n_background_appearance == "1")filter: blur(20px);scale: 1.1;@endif
      @if($n_background_appearance == "2")opacity: 0.6;@endif
      z-index: -1;
      background-position: center;
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
    }

    body {
      z-index: 2;
    }
    
  @endif

</style>
<style id="nebula-variables">
  <?php
    $__transparency="";
    if($n_dashboard_transparency == "1") { $__transparency="BB"; }
    elseif($n_dashboard_transparency == "2") { $__transparency="99"; }
    elseif($n_dashboard_transparency == "3") { $__transparency="60"; }
  ?>

  /* Variables */
  :root {
    --sidebarPrimary: {{ $n_palette_sidebar_1 }};
    --sidebarPrimaryHover: {{ $n_palette_sidebar_2 }};
    --sidebarSecondary: {{ $n_palette_sidebar_3 }};
    --sidebarSecondaryHover: {{ $n_palette_sidebar_4 }};
    --sidebarSecondaryActive: {{ $n_palette_sidebar_5 }};
    --sidebarSecondarySelected: {{ $n_palette_sidebar_6 }};
    --sidebarButtonActive: {{ $n_palette_sidebar_8 }};

    --pagePrimary: {{ $n_palette_dashboard_1 }};
    --pagePrimaryHover: {{ $n_palette_dashboard_2 }};
    --pageSecondary: {{ $n_palette_dashboard_3 }}{{ $__transparency }};
    --pageSecondaryHover: {{ $n_palette_dashboard_4 }}{{ $__transparency }};
    --pageSecondaryActive: {{ $n_palette_dashboard_5 }}{{ $__transparency }};
    --pageSecondarySelected: {{ $n_palette_dashboard_6 }}{{ $__transparency }};
    --pageButtonDefault: {{ $n_palette_dashboard_8 }};
    --pageButtonHover: {{ $n_palette_dashboard_9 }};

    --authA: {{ $n_palette_auth_1 }}; /* #080808 */
    --authB: {{ $n_palette_auth_2 }}; /* #0f0f0f */
    --authC: {{ $n_palette_auth_3 }}; /* #1f1f1f */
    --authD: {{ $n_palette_auth_4 }}; /* #2c2c2c */
    --authE: {{ $n_palette_auth_5 }}; /* #ff5151 */
    
    --sidebarBackground: {{ $n_palette_sidebar_7 }};
    --pageBackground: {{ $n_palette_dashboard_7 }};
  }

</style>
@if(Auth::check())
<script>
  window.onload = function() {
    setInterval(() => { sidebarRefresh() }, 1000)
    filesRefresh()
  }

  window.addEventListener('locationchange', function () {
    setTimeout(() => {sidebarRefresh()}, 200)
  });

  function sidebarButtonEvent(btn) {
    serverId = fetchServerId()
    if(btn === "home") { document.querySelector("a:not([blueprint])[href='/']").click() };
    @if(Auth::user()->root_admin == 1) if(btn === "logout") { document.querySelector(".NavigationBar__RightNavigation-sc-tupl2x-0 > button:nth-child(5)").click() };
    @else if(btn === "logout") { document.querySelector(".NavigationBar__RightNavigation-sc-tupl2x-0 > button:nth-child(4)").click() }; @endif
    // servers
    if(btn === "serverTerminal") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"']").click() };
    if(btn === "serverFiles") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/files']").click() };
    if(btn === "serverDatabases") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/databases']").click() };
    if(btn === "serverSchedules") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/schedules']").click() };
    if(btn === "serverUsers") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/users']").click() };
    if(btn === "serverBackups") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/backups']").click() };
    if(btn === "serverNetwork") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/network']").click() };
    if(btn === "serverStartup") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/startup']").click() };
    if(btn === "serverSettings") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/settings']").click() };
    if(btn === "serverActivity") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/activity']").click() };
    // users
    if(btn === "accountAccount") { document.querySelector("a:not([blueprint])[href='/account']").click() };
    if(btn === "accountApi") { document.querySelector("a:not([blueprint])[href='/account/api']").click() };
    if(btn === "accountSsh") { document.querySelector("a:not([blueprint])[href='/account/ssh']").click() };
    if(btn === "accountActivity") { document.querySelector("a:not([blueprint])[href='/account/activity']").click() };

    sidebarRefresh()
  }
  async function sidebarRefresh() {
    // Get current window path and assign it to a variable.
    currentPage = nebulaCurrentPage()
    fileModeHide()
    assignElements(currentPage)
    // Show selected button.
    if(currentPage === "home") {document.getElementById('sidebarMainHome').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarMainHome').className = 'sidebarButton';}
    if(currentPage.startsWith("account")) {
      document.getElementById('sidebarCategoryAccount').style.display = "inline";
      if(currentPage === "accountAccount") {document.getElementById('sidebarAccountAccount').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarAccountAccount').className = 'sidebarButton';}
      if(currentPage === "accountApi") {document.getElementById('sidebarAccountApi').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarAccountApi').className = 'sidebarButton';}
      if(currentPage === "accountSsh") {document.getElementById('sidebarAccountSsh').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarAccountSsh').className = 'sidebarButton';}
      if(currentPage === "accountActivity") {document.getElementById('sidebarAccountActivity').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarAccountActivity').className = 'sidebarButton';}
    } else {document.getElementById('sidebarCategoryAccount').style.display = "none";}
    if(currentPage.startsWith("server")) {
      document.getElementById('sidebarCategoryServer').style.display = "inline";
      if(currentPage === "serverTerminal") {document.getElementById('sidebarServerTerminal').className = 'sidebarButton sidebarButtonSelected';refreshStatusOrb() } else {document.getElementById('sidebarServerTerminal').className = 'sidebarButton';}
      if(currentPage === "serverFiles") {document.getElementById('sidebarServerFilemanager').className = 'sidebarButton sidebarButtonSelected';fileModeShow() }
      if(currentPage === "serverFilesEdit") {document.getElementById('sidebarServerFilemanager').className = 'sidebarButton sidebarButtonSelected'; }
      if((currentPage != "serverFiles") && (currentPage != "serverFilesEdit")) { document.getElementById('sidebarServerFilemanager').className = 'sidebarButton'; }
      if(currentPage === "serverDatabases") {document.getElementById('sidebarServerDatabases').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerDatabases').className = 'sidebarButton';}
      if(currentPage === "serverSchedules") {document.getElementById('sidebarServerSchedules').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerSchedules').className = 'sidebarButton';}
      if(currentPage === "serverUsers") {document.getElementById('sidebarServerUsers').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerUsers').className = 'sidebarButton';}
      if(currentPage === "serverBackups") {document.getElementById('sidebarServerBackups').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerBackups').className = 'sidebarButton';}
      if(currentPage === "serverNetwork") {document.getElementById('sidebarServerNetwork').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerNetwork').className = 'sidebarButton';}
      if(currentPage === "serverStartup") {document.getElementById('sidebarServerStartup').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerStartup').className = 'sidebarButton';}
      if(currentPage === "serverSettings") {document.getElementById('sidebarServerSettings').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerSettings').className = 'sidebarButton';}
      if(currentPage === "serverActivity") {document.getElementById('sidebarServerActivity').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerActivity').className = 'sidebarButton';}

      setTimeout(() => {
        serverId = fetchServerId()
        sidebarServerButtonRefresh(serverId);
      }, 300)
    } else {document.getElementById('sidebarCategoryServer').style.display = "none";}

    @if($n_sidebar_always_visible_buttons == "0")
    if(currentPage == "home") { document.getElementById('sidebarCategoryGeneral').style.display = "inline" }
    else { document.getElementById('sidebarCategoryGeneral').style.display = "none" }
    @endif
  }
  function sidebarServerButtonRefresh(serverId) {
    nopage=true
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"']") === null) {
      document.getElementById('sidebarServerTerminal').style.display = "none";
    } else {
      document.getElementById('sidebarServerTerminal').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/files']") === null) {
      document.getElementById('sidebarServerFilemanager').style.display = "none";
    } else {
      document.getElementById('sidebarServerFilemanager').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/databases']") === null) {
      document.getElementById('sidebarServerDatabases').style.display = "none";
    } else {
      document.getElementById('sidebarServerDatabases').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/schedules']") === null) {
      document.getElementById('sidebarServerSchedules').style.display = "none";
    } else {
      document.getElementById('sidebarServerSchedules').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/users']") === null) {
      document.getElementById('sidebarServerUsers').style.display = "none";
    } else {
      document.getElementById('sidebarServerUsers').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/backups']") === null) {
      document.getElementById('sidebarServerBackups').style.display = "none";
    } else {
      document.getElementById('sidebarServerBackups').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/network']") === null) {
      document.getElementById('sidebarServerNetwork').style.display = "none";
    } else {
      document.getElementById('sidebarServerNetwork').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/startup']") === null) {
      document.getElementById('sidebarServerStartup').style.display = "none";
    } else {
      document.getElementById('sidebarServerStartup').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/settings']") === null) {
      document.getElementById('sidebarServerSettings').style.display = "none";
    } else {
      document.getElementById('sidebarServerSettings').style.display = "inline";
      nopage=false
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/activity']") === null) {
      document.getElementById('sidebarServerActivity').style.display = "none";
    } else {
      document.getElementById('sidebarServerActivity').style.display = "inline";
      nopage=false
    }

    // if nopage = true then no page buttons are appearing.
  }
</script>
@endif
@if(Auth::check() != true)
<!-- PTERODACTYL AUTHENTICATION THEMING -->
<style id="nebula-authentication-theme">
  html, body {
    background-color: #000 !important;
  }
  div.ProgressBar___StyledDiv-sc-14ayc3f-1.jleFWY { position: fixed; z-index: 4; top: 0; left: 0 !important; width: 100% !important; }

  @keyframes backdrop {
    0%   {scale: calc(.1 +@if($n_auth_background_appearance == "1") 2.4 @else 1 @endif)}
    100% {scale: @if($n_auth_background_appearance == "1") 2 @else 1 @endif}
  }
  .nebula-auth-wallpaper { 
    z-index: 3;
    overflow: hidden;
    @if($n_auth_background_image == "")background-color: var(--authA);
    @else background: url("{{ $n_auth_background_image }}") no-repeat; background-color: #000;@endif
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100vw;
    top: 0; left: 0;
    position: fixed;
    @if($n_auth_background_appearance == "1")filter: blur(50px);scale: 2;@endif
    @if($n_auth_background_appearance == "1")filter: blur(50px);@endif
    @if($n_auth_background_appearance == "2")opacity: 0.6;@endif
    animation: backdrop 2s;
  }
  .nebula-auth-backdrop {
    background-color: #000 !important;
    z-index: 2;
    position: fixed;
    left: 0; top: 0;
    width: 100vw; height: 100vh;
  }

  div.App___StyledDiv-sc-2l91w7-0.fnfeQw { background-color: var(--pageBackground) !important; z-index: 1; }
  .LoginFormContainer___StyledDiv-sc-cyh04c-3 { padding-left: 10px !important; padding-right: 10px !important; }

  /* login container */
  div.LoginFormContainer__Container-sc-cyh04c-0 {
    z-index: 4;
    position: fixed;
    width: 30%;
    left: 50%;
    background-color: var(--authB);
    border-radius: 10px;
    top: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    padding: 40px !important;
  }
  @media screen and (max-width: 1200px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 40%;}}
  @media screen and (max-width: 1100px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 45%;}}
  @media screen and (max-width: 1000px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 50%;}}
  @media screen and (max-width: 900px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 55%;}}
  @media screen and (max-width: 800px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 60%; padding: 30px !important;}}
  @media screen and (max-width: 700px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 70%; padding: 25px !important;}}
  @media screen and (max-width: 600px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 80%; padding: 20px !important;}}
  @media screen and (max-width: 500px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 90%; padding: 15px !important;}}


  .LoginFormContainer___StyledDiv-sc-cyh04c-3 { background: none; background-color: #00000000; box-shadow: none; }
  div.LoginFormContainer___StyledDiv2-sc-cyh04c-4 { display: none; }
  .Input-sc-19rce1w-0.fFYzlR {
    background: none !important;
    background-color: var(--authC) !important;
    border: none;
    border-bottom: 5px var(--authD) solid !important;
    border-radius: 0;
  }
  .Input-sc-19rce1w-0.floJYL {
    background: none !important;
    background-color: var(--authC) !important;
    border: none;
    border-bottom: 5px var(--authE) solid !important;
    border-radius: 0;
  }
  input[type=text],input[type=text]::placeholder, 
  input[type=password],input[type=password]::placeholder, 
  input[type=email],input[type=email]::placeholder{
    color:white !important;
  }

  /*ptero footer*/
  .LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK {
    padding: 0;
    margin: 0;
    opacity: 0.5;
  }

</style>
@endif
<!-- PTERODACTYL PANEL THEMING -->
<style id="nebula-theme">
  /* Pterodactyl */
  div.w-full.bg-neutral-900.shadow-md.overflow-x-auto { display: none; background-color: var(--pageBackground); opacity: 0; transition: none; }
  div.SubNavigation-sc-lfuaoi-0.jZPsWO.fade-appear-done.fade-enter-done { display: none; background-color: var(--pageBackground); opacity: 0; transition: none; }
  @if($n_background_image == "") div.App___StyledDiv-sc-2l91w7-0.fnfeQw { background-color: var(--pageBackground) }
  @else div.App___StyledDiv-sc-2l91w7-0.fnfeQw { background-color: #00000000 } @endif
  div.SubNavigation-sc-lfuaoi-0.jZPsWO { display: none; background-color: var(--pageBackground); opacity: 0; transition: none; }
  div.ProgressBar___StyledDiv-sc-14ayc3f-1.jleFWY { position: fixed; z-index: 4; top: 0; left: 70px; width: calc(100% - 70px); }
  .bg-neutral-900, .bg-gray-900, .bg-neutral-700 { background-color: var(--pageSecondaryActive) }
  .ZkNLd:not([type="checkbox"]):not([type="radio"]) { background: none; background-color: var(--pageSecondaryActive); border: none; }
  .jqTCDz:not([type="checkbox"]):not([type="radio"]) { background: none; background-color: var(--pageSecondaryActive); border: none; }
  input.form-input.styles-module_S9h-xMSg.styles-module_AWe-iPIe.mt-3,
  input.form-input.styles-module_S9h-xMSg.styles-module_AWe-iPIe.mt-1 { background: none; background-color: var(--pageSecondaryActive); border: none; }
  select.Select-sc-17exaqp-0 { background-color: var(--pageSecondaryActive); border: none; }
  div.ContentBox___StyledDiv-sc-mjlt6f-2.iGOcRf { background-color: var(--pageSecondary) }
  .FileDropdownMenu___StyledDiv-sc-17ln8oh-3 + .Fade__Container-sc-1p0gm8n-0 .DropdownMenu___StyledDiv-sc-1ojgpy2-1 { display: none }
  
  .style-module_3kBDV_wo, .cDkCmT {
    --thisButtonColor: var(--pageButtonDefault); /*#474849*/
    --tw-ring-opacity: 0 !important;
    --tw-ring-color: #00000000 !important;
    --tw-ring-offset-width: 0px !important;
    background: none !important;
    background-color: var(--thisButtonColor) !important;
    border: none !important;
    transition: background-color .3s;
   }
  .style-module_3kBDV_wo:hover, .cDkCmT:hover { --thisButtonColor: var(--pageButtonHover) } /*#525354*/
  .style-module_Yp7-2Fw- { --thisButtonColor: var(--pageSecondaryHover) }
  .style-module_Yp7-2Fw-:hover { background-color: var(--pageSecondaryActive) !important; }

  /* Modal 1 */
  div.Modal___StyledDiv2-sc-9vzni8-3 { background-color: var(--pageSecondary) }
  /* Modal 2 */
  div.style-module_1RnhIT0w div.flex.p-6.pb-0.overflow-y-auto { background-color: var(--pageSecondary) }
  div.style-module_1RnhIT0w { background-color: var(--pageSecondaryHover) }
  div.px-6.py-3.bg-gray-700.flex.items-center.justify-end.space-x-3.rounded-b { background-color: var(--pageSecondaryHover) }
  div.style-module_1RnhIT0w { border: var(--pageSecondaryHover) 5px solid; --tw-ring-shadow: none; }
  div.fixed:nth-child(1) { background-color: #00000075 }
  button.style-module_4LBM1DKx.style-module_3kBDV_wo.style-module_3xOG8K0n.style-module_2UCZLAAp.style-module_Yp7-2Fw-.group {
    background-color: var(--pageSecondaryHover);
  }
  /* pterodactyl home */
  div.ServerRow___StyledDiv-sc-1ibsw91-3.ecJXa-d div.icon.mr-4 {
    background-color: var(--pageSecondaryHover)
  }
  /* account 2fa codes */
  #disable-totp-form .form-input.styles-module_S9h-xMSg.styles-module_AWe-iPIe,
  .bg-gray-800.rounded.p-2.mt-6.cursor-pointer
  { background: none; background-color: var(--pageSecondaryHover) !important }
  /* account api key */
  .ApiKeyModal___StyledPre-sc-s6pcab-2.irvYxA,
  .AccountApiContainer___StyledCode-sc-1c4s3nm-10.lnIosn { background-color: var(--pageSecondaryHover) !important }
  /* file manager */
  div.style-module_35MPv1CD.active { margin-bottom: 0px; background-color: var(--pageSecondary); transition: background-color .5s; }
  div.style-module_1WqkLT9X { margin-bottom: 6.5px; border-radius: 6px; background-color: var(--pageSecondary); transition: background-color .5s; }
  div.style-module_35MPv1CD.active:hover { background-color: var(--pageSecondaryHover) }
  div.style-module_1WqkLT9X:hover { background-color: var(--pageSecondaryHover) }

  .CodeMirror.cm-s-ayu-mirage.CodeMirror-wrap.CodeMirror-overlayscroll,
  .CodeMirror-gutter.CodeMirror-foldgutter,
  .CodeMirror-gutter.CodeMirror-linenumbers,
  .FileEditContainer___StyledDiv4-sc-48rzpu-8.eDlcZT .Select-sc-17exaqp-0.dupyoa { background-color: var(--pageSecondary); border: none; }
  
  /* mass action bar */
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1.haunnZ.fade-enter-done,
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1.haunnZ {
    background-color: var(--pageSecondaryHover);
    height: 50px;
    border-radius: 10px;
    padding: 10px 10px !important;
  }
  /* mass action bar container */
  div.fixed.bottom-0.mb-6.flex.justify-center.w-full.z-50 {
    width: auto;
    right: 150px;
  }
  /* mass action bar buttons */
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(1),
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(2),
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(3) {
    font-size: 0px;
    margin-top: 10px !important;
    margin-bottom: 10px !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    scale: 0.75 !important;
    border-radius: 5px !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
    background-color: #00000000 !important;
  }

  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(1)::before {
    font-size: 22px;
    color: #c7c9cc;
    font-family: bootstrap-icons !important;
    content: "\F2E2";
    background-color: #444444;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 7px;
    padding-bottom: 7px;
    border-radius: 5px;
  }
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(2)::before {
    font-size: 22px;
    color: #c7c9cc;
    font-family: bootstrap-icons !important;
    content: "\F10C";
    background-color: #444444;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 7px;
    padding-bottom: 7px;
    border-radius: 5px;
  }
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(3)::before {
    font-size: 22px;
    color: #ff524c;
    font-family: bootstrap-icons !important;
    content: "\F78A";
    background-color: #444444;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 7px;
    padding-bottom: 7px;
    border-radius: 5px;
  }
  
  /* checkbox */
  .jqTCDz[type="checkbox"]:checked, .jqTCDz[type="radio"]:checked {
    background: hex(#3a3a3a00);
    background-color: #dddddd;
    background-image: none;
    border: none;
    border-color: #00000000;
  }
  .jqTCDz[type="checkbox"], .jqTCDz[type="radio"] { border-color: #333333; transition: border-color .5s, background-color .5s }
  .jqTCDz[type="checkbox"]:hover, .jqTCDz[type="radio"]:hover { border-color: #3a3a3a; transition: border-color .5s, background-color .5s }

  /* terminal */
  div.style-module_2Vp6MaXq.bg-gray-600.cursor-pointer { background-color: var(--pageSecondary); overflow: hidden; color: #fff !important; }
  div.style-module_2Vp6MaXq.bg-gray-600.cursor-pointer div.style-module_1DtraXMW.bg-gray-700 { background-color: var(--pageSecondaryHover); box-shadow: none !important; border: none !important; }
  div.style-module_2Vp6MaXq.bg-gray-600 { background-color: var(--pageSecondary); overflow: hidden; }
  div.style-module_2Vp6MaXq.bg-gray-600 div.style-module_1DtraXMW.bg-gray-700 { background-color: #00000000 !important; box-shadow: none; background: none !important; }
  div.style-module_2XbmHEcn:nth-child(1) { background-color: var(--pageSecondary); border-bottom: 3px solid var(--pageSecondary); }
  div.style-module_2XbmHEcn:nth-child(2) { background-color: var(--pageSecondary); border-bottom: 3px solid var(--pageSecondary); }
  div.style-module_2Vp6MaXq:nth-child(2) > div:nth-child(2),
  div.style-module_1DtraXMW.bg-red-500,
  div.style-module_1DtraXMW.bg-yellow-500 { background: none !important; }
  div.style-module_2XbmHEcn:nth-child(3) { background-color: var(--pageSecondary); border-bottom: 3px solid var(--pageSecondary); }
  
  /* copy notification */
  div.rounded-md.py-3.px-4.text-gray-200.bg-neutral-600\/95.shadow {
    background-color: var(--pageSecondary) !important;
  }


  /* ICONS INSTEAD OF TEXT ON START/STOP/RESTART BUTTONS */
  @if($n_server_colored_power)
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(1),
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(2),
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(3) {
      font-size: 0px !important;
      background-color: transparent !important;
      transition: background-color .3s !important;
      border: none !important;
      box-shadow: none !important;
      width: 50px !important;
      /* flex: unset !important; */
    }

    #power-start { background-color: #18b855 !important; }
    #power-restart { background-color: #ca7a25 !important; }
    #power-stop { background-color: #bc362f !important; }

    #power-start:hover { background-color: #149e49 !important; }
    #power-restart:hover { background-color: #a76218 !important; }
    #power-stop:hover { background-color: #a72721 !important; }
  @else
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(1),
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(2),
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(3) {
      font-size: 0px !important;
      background-color: transparent !important;
      transition: background-color .3s !important;
      border: none !important;
      box-shadow: none !important;
      width: 50px !important;
      flex: unset !important;
    }

    #power-start, 
    #power-restart,
    #power-stop { 
      background-color: var(--pageSecondary) !important;
    }

    #power-start:hover, 
    #power-restart:hover,
    #power-stop:hover
      background-color: var(--pageSecondaryHover) !important;
    }
  @endif
  {}
  #power-start::before {
    font-family: bootstrap-icons !important;
    font-size: 25px !important;
    content: "\F4F4" !important;
  }
  #power-restart::before {
    font-family: bootstrap-icons !important;
    font-size: 21px !important;
    content: "\F130" !important;
  }
  #power-stop::before {
    font-family: bootstrap-icons !important;
    font-size: 25px !important;
    content: "\F592" !important;
  }
  

  /* default status */
  .Icon___StyledSvg-sc-omsq29-0.ejRaBu.text-gray-100,
  /* warning status */
  .style-module_1DtraXMW.bg-yellow-500 .Icon___StyledSvg-sc-omsq29-0.ejRaBu.text-gray-50,
  /* danger status */
  .style-module_1DtraXMW.bg-red-500 .Icon___StyledSvg-sc-omsq29-0.ejRaBu.text-gray-50 {
    /* styles */
    z-index: 4;
    margin-right:25px;
    scale: 4;
    color: #ffffff09 !important;
    transition: color .3s, scale .3s, background-color .3s;
  }

  .Icon___StyledSvg-sc-omsq29-0.ejRaBu.text-gray-100:hover {
    z-index: 4;
    color: #ffffff12 !important;
  }

  /* address */ div.style-module_2Vp6MaXq:nth-child(1) > div:nth-child(2) > svg:nth-child(1) {scale: 5 !important;rotate: -20deg !important;}
  /* address hover */ div.style-module_2Vp6MaXq:nth-child(1):hover > div:nth-child(2) > svg:nth-child(1) {scale: 5.3 !important; color: #ffffff12 !important;}
  
  /* uptime */ div.style-module_2Vp6MaXq:nth-child(2) > div:nth-child(2) > svg:nth-child(1) {scale: 4.5 !important;rotate: -20deg !important; color: #ffffff09 !important; transition: color .3s, scale .3s, background-color .3s;}
  /* uptime hover */ div.style-module_2Vp6MaXq:nth-child(2):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.8 !important; color: #ffffff12 !important;}

  /* cpu */ div.style-module_2Vp6MaXq:nth-child(3) > div:nth-child(2) > svg:nth-child(1) {scale: 3.8 !important;rotate: -20deg !important;}
  /* cpu hover */ div.style-module_2Vp6MaXq:nth-child(3):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.1 !important; color: #ffffff12 !important;}
  
  /* ram */ div.style-module_2Vp6MaXq:nth-child(4) > div:nth-child(2) > svg:nth-child(1) {scale: 4 !important;rotate: -20deg !important;}
  /* ram hover */ div.style-module_2Vp6MaXq:nth-child(4):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.3 !important; color: #ffffff12 !important;}
  
  /* disk */ div.style-module_2Vp6MaXq:nth-child(5) > div:nth-child(2) > svg:nth-child(1) {scale: 4.5 !important;rotate: -20deg !important;}
  /* disk hover */ div.style-module_2Vp6MaXq:nth-child(5):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.8 !important; color: #ffffff12 !important;}
  
  /* network in */ div.style-module_2Vp6MaXq:nth-child(6) > div:nth-child(2) > svg:nth-child(1) {scale: 4.5 !important;rotate: -20deg !important;}
  /* network in hover */ div.style-module_2Vp6MaXq:nth-child(6):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.8 !important; color: #ffffff12 !important;}
  
  /* network out */ div.style-module_2Vp6MaXq:nth-child(7) > div:nth-child(2) > svg:nth-child(1) {scale: 4.5 !important;rotate: -20deg !important;}
  /* network out hover */ div.style-module_2Vp6MaXq:nth-child(7):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.8 !important; color: #ffffff12 !important;}

  /* xterm */
  .relative.style-module_1AMtO9lt input { background: none; background-color: var(--pageSecondaryHover); }
  .style-module_1n_DiqmT.style-module_1AMtO9lt, .xterm-screen, .xterm-viewport, .terminal.xterm { background: none !important; background-color: var(--pageSecondary) !important; }

  /* schedules */
  .GreyRowBox-sc-1xo9c6v-0,
  .flex.ScheduleEditContainer___StyledScheduleCronRow-sc-1fhsmlc-5.gLoyLu { background-color: var(--pageSecondary) }
  div.ScheduleEditContainer___StyledDiv3-sc-1fhsmlc-7 { background-color: var(--pageSecondary); border-color: var(--pageSecondaryHover) }
  div.ScheduleEditContainer___StyledDiv-sc-1fhsmlc-0.bWXUsX { background-color: var(--pageSecondaryHover) }
  div.ScheduleTaskRow___StyledDiv-sc-17r38ls-0.ipThkt { background: none !important; background-color: var(--pageSecondaryHover) !important; border: none; margin-bottom: 5px; border-radius: 2.5px }
  .ScheduleTaskRow___StyledDiv4-sc-17r38ls-6.cPagWz { background-color: var(--pageSecondaryActive); }
  .ScheduleEditContainer___StyledDiv7-sc-1fhsmlc-18 { background: none !important; }

  div.EditScheduleModal___StyledDiv2-sc-wh9db9-4,
  div.EditScheduleModal___StyledDiv4-sc-wh9db9-6,
  div.EditScheduleModal___StyledDiv5-sc-wh9db9-7,
  div.TaskDetailsModal___StyledDiv5-sc-1b5dnyw-7 { background-color: var(--pageSecondaryHover); border: none; } /*create/edit schedule*/

  div.EditScheduleModal___StyledDiv3-sc-wh9db9-5.hsBdEm,
  div.EditScheduleModal___StyledDiv3-sc-wh9db9-5.hsBdEm * {
    background-color: var(--pageSecondaryActive) !important;
    border-radius: 10px !important;
  }
  div.EditScheduleModal___StyledDiv3-sc-wh9db9-5.hsBdEm {
    margin-top: 15px;
  }
  .jpYRCT { box-shadow: none !important; }


  /* settings */
  div.SettingsContainer___StyledTitledGreyBox-sc-1e5ycmz-3 > div:nth-child(1) { background-color: var(--pageSecondary) }
  div.SettingsContainer___StyledTitledGreyBox-sc-1e5ycmz-3 > div:nth-child(2), .oLbNP { background-color: var(--pageSecondaryHover) }
  .SettingsContainer___StyledTitledGreyBox-sc-1e5ycmz-3 > div:nth-child(2) > div:nth-child(1) > input:nth-child(2) { background-color: var(--pageSecondaryActive); border: none; }
  .SettingsContainer___StyledDiv3-sc-1e5ycmz-4.keyYci .Input-sc-19rce1w-0.jqTCDz.cursor-pointer { background-color: var(--pageSecondaryActive); border: none; }

  div.RenameServerBox___StyledTitledGreyBox-sc-1bh2mfg-0 > div:nth-child(1) { background-color: var(--pageSecondary) }
  div.RenameServerBox___StyledTitledGreyBox-sc-1bh2mfg-0 > div:nth-child(2) { background-color: var(--pageSecondaryHover) }
  #name { background-color: var(--pageSecondaryActive); border: none; }
  .Input__Textarea-sc-19rce1w-1 { background-color: var(--pageSecondaryActive); border: none; }

  div.SettingsContainer___StyledTitledGreyBox2-sc-1e5ycmz-10 > div:nth-child(1) { background-color: var(--pageSecondary) }
  div.SettingsContainer___StyledTitledGreyBox2-sc-1e5ycmz-10 > div:nth-child(2) { background-color: var(--pageSecondaryHover) }

  .SettingsContainer___StyledCode-sc-1e5ycmz-12.EwfIk,
  .SettingsContainer___StyledCode2-sc-1e5ycmz-14.izAmwE { background-color: var(--pageSecondaryActive); }

  div.ReinstallServerBox___StyledTitledGreyBox-sc-1prmksw-0 > div:nth-child(1) { background-color: var(--pageSecondary) }
  div.ReinstallServerBox___StyledTitledGreyBox-sc-1prmksw-0 > div:nth-child(2) { background-color: var(--pageSecondaryHover) }
  /* activity  ACCOUNT + SERVER */
  .ContentContainer-sc-x3r2dw-0.PageContentBlock___StyledContentContainer-sc-kbxq2g-0.jyeSuy.HeRWk.fade-appear-done.fade-enter-done div.bg-gray-700 div.grid {
    background-color: var(--pageSecondary);
    border-radius: 10px;
    border: none;
    margin-bottom: 10px;
  }
  .ContentContainer-sc-x3r2dw-0.PageContentBlock___StyledContentContainer-sc-kbxq2g-0.jyeSuy.HeRWk.fade-appear-done.fade-enter-done div.bg-gray-700,
  .bg-gray-700,
  div.ContentContainer-sc-x3r2dw-0:nth-child(2) {
    background: none;
    background-color: none;
    transition: none;
    animation: none;
    border: none;
    border-color: #00000000;
  }
  /* startup */
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv2-sc-gvsoy-1.jRrWLs { background-color: var(--pageSecondary) }
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ { background-color: var(--pageSecondaryHover) }
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP.StartupContainer___StyledTitledGreyBox-sc-163imy2-1.kRunTE { background-color: var(--pageSecondaryHover) }
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP.StartupContainer___StyledTitledGreyBox2-sc-163imy2-4.aRhRz { background-color: var(--pageSecondaryHover) }
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP.StartupContainer___StyledTitledGreyBox2-sc-163imy2-4.aRhRz .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ .Select-sc-17exaqp-0.dupyoa,
  .StartupContainer___StyledDiv2-sc-163imy2-2.gMdcgi p { background-color: var(--pageSecondaryActive); border: none; }

  .StartupContainer___StyledDiv3-sc-163imy2-8.gMWjQt .TitledGreyBox___StyledDiv2-sc-gvsoy-1.jRrWLs { background-color: var(--pageSecondary) }
  .StartupContainer___StyledDiv3-sc-163imy2-8.gMWjQt .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ,
  .StartupContainer___StyledDiv3-sc-163imy2-8.gMWjQt .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP { background-color: var(--pageSecondaryHover) }
  .Label-sc-g780ms-0.eDArzA,
  .StartupContainer___StyledDiv3-sc-163imy2-8.gMWjQt .Input-sc-19rce1w-0.jqTCDz { border: none; }
  /* subusers */
  .EditSubuserModal___StyledDiv4-sc-1hon03w-7.bgqXrq .TitledGreyBox___StyledDiv2-sc-gvsoy-1.jRrWLs { background-color: var(--pageSecondary) }
  .EditSubuserModal___StyledDiv4-sc-1hon03w-7.bgqXrq .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP.EditSubuserModal___StyledPermissionTitleBox-sc-1hon03w-8,
  .EditSubuserModal___StyledDiv4-sc-1hon03w-7.bgqXrq .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ { background-color: var(--pageSecondaryHover) }
  .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ .PermissionRow__Container-sc-1h899cn-0.icxFlO:hover { border-color: #00000000; border: none; background-color: var(--pageSecondaryActive) }
  .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ .PermissionRow__Container-sc-1h899cn-0.icxFlO { border-color: #00000000; border: none; }
  /* backups */
  .CreateBackupButton___StyledDiv2-sc-da8bqw-3.eDncUf { background-color: var(--pageSecondaryHover); border: none; }
</style>
@else
<iframe
  id="nebula-initialization-frame"
  width="100vw"
  height="100vh"
  frameborder="0"
  scrolling="no"
  style="
  position: fixed;
  left: 0;
  top: 0;
  width: 100vw;
  height: 100vh;
  z-index: 9999999;
  "
  src="/extensions/nebula/html/configure/index.html"
></iframe>
<script>console.log("[NEBULA] Database values have not been initialized yet, please open Nebula in your admin dashboard to initialize them.")</script>
@endif
@if(Auth::check() != true)
  <div class="nebula-auth-wallpaper"></div>
  <div class="nebula-auth-backdrop"></div>
  <style> @import url("/extensions/nebula/libraries/hideRecaptcha.css"); </style>
  @if($blueprint->dbGet("settings", "recaptcha.enabled") == "true")
    <style> @import url("/extensions/nebula/libraries/recaptcha.css"); </style>
  @endif
  <div class="notification">
    <div class="notificationBar"></div>
    <div class="notificationIcon"></div>
    <div class="notificationTextContainer">
      <p class="notificationText"><b style="font-size: 14px;">Protected by reCAPTCHA</b><br>
        <span style="font-size: 12px;"><a href="https://www.google.com/intl/en/policies/privacy/" style="color: #4D4DFF;">Privacy</a>, <a href="https://www.google.com/intl/en/policies/terms/" style="color: #4D4DFF;">Terms</a></span></p>
    </div>
</div>
@endif
@if(Auth::check())

  <div id="fileMode" class="file-manager-switch">
    <div class="file-manager-switch-container">
      <button id="filesGrid" class="file-manager-switch-grid" onclick="switchFilesLayout()">
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M10 7h4v4h-4zm6 0h4v4h-4zM4 7h4v4H4zm6 6h4v4h-4zm6 0h4v4h-4zM4 13h4v4H4z"></path></svg>
      </button>
      <button id="filesList" class="file-manager-switch-list" onclick="switchFilesLayout()">
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"></path></svg>
      </button>
    </div>
  </div>

@if($n_keyboard_shortcuts == "1") 

  <!-- KEYBINDS MODAL -->
  <?php
    if($n_keybind_icons == "0") {
      $KEY_CTRL = 'CTRL';
      $KEY_ALT = 'ALT';
      $KEY_CMD = 'CMD';
      $KEY_WIN = 'WIN';
      $KEY_SHIFT = 'SHIFT';
      $KEY_ESCAPE = 'ESC';
      $KEY_SLASH = '/';

      $KEY_1 = "1";
      $KEY_2 = "2";
      $KEY_3 = "3";
      $KEY_4 = "4";
      $KEY_5 = "5";
      $KEY_6 = "6";
      $KEY_7 = "7";
      $KEY_8 = "8";
      $KEY_9 = "9";
      $KEY_0 = "0";
    } else {
      $KEY_CTRL = '<i class="bi bi-option"></i>';
      $KEY_ALT = '<i class="bi bi-alt"></i>';
      $KEY_CMD = '<i class="bi bi-command"></i>';
      $KEY_WIN = '<i class="bi bi-microsoft"></i>';
      $KEY_SHIFT = '<i class="bi bi-shift"></i>';
      $KEY_ESCAPE = '<i class="bi bi-escape"></i>';
      $KEY_SLASH = '<i class="bi bi-slash-lg"></i>';

      $KEY_1 = '<i class="bi bi-1-square"></i>';
      $KEY_2 = '<i class="bi bi-2-square"></i>';
      $KEY_3 = '<i class="bi bi-3-square"></i>';
      $KEY_4 = '<i class="bi bi-4-square"></i>';
      $KEY_5 = '<i class="bi bi-5-square"></i>';
      $KEY_6 = '<i class="bi bi-6-square"></i>';
      $KEY_7 = '<i class="bi bi-7-square"></i>';
      $KEY_8 = '<i class="bi bi-8-square"></i>';
      $KEY_9 = '<i class="bi bi-9-square"></i>';
      $KEY_0 = '<i class="bi bi-0-square"></i>';
    };
  ?>

  <a onclick="hideKeybinds()">
    <div id="keybindsSiteOverlay" class="keybinds-site-overlay"></div>
  </a>
  <div id="keybindsContainer" class="keybinds-container">
    <div class="keybinds-content-box">
      <div class="keybinds-content">
        <h2 class="keybinds-content-title">Keybinds</h2>
        <img src="/extensions/nebula/libraries/assets/keyboard.png" class="keybinds-emoji" id="keybindsEmoji"/>
        <p class="keybinds-content-text">Quickly navigate through the panel using keybinds.</p><br>
        
        <!--Global-->
        <p class="keybinds-content-text-bold">Global</p>
        <div class="keybinds-content-text-box">

          <!-- View Keybinds -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">View Keybinds</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_SLASH !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} {!! $KEY_SLASH !!}
              </code>
            </p></div>
          </div>

          <!-- Home -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">主頁</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_ESCAPE !!}
              </code>
            </p></div>
          </div>

          <!-- Account -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">帳號</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} .
              </code>
            </p></div>
          </div>
          
          @if(Auth::user()->root_admin == 1)
          <!-- Admin -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">後臺管理</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} ,
              </code>
            </p></div>
          </div>
          @endif

          <p style="opacity: 0; font-size: 0px;">.</p>
        </div><br>

        <!--Server management-->
        <p class="keybinds-content-text-bold">伺服器管理</p>
        <div class="keybinds-content-text-box">

          <!-- Terminal -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Terminal</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_1 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} .
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">啟動</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} Z
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">停止</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} X
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">重啟</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} C
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">複製 IP 位址</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} A
              </code>
            </p></div>
          </div>

          <!-- Files -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">檔案</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_2 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} ,
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Switch layout</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} Z
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">建新檔案</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} [
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">建新目錄</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} ]
              </code>
            </p></div>
          </div>

          <!-- Databases -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">資料庫</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_3 !!}
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">新資料庫</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} [
              </code>
            </p></div>
          </div>

          <!-- Schedules -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">排程</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_4 !!}
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">創新排程</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} [
              </code>
            </p></div>
          </div>

          <!-- Users -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">使用者</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_5 !!}
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New User</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} [
              </code>
            </p></div>
          </div>

          <!-- Backups -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Backups</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_6 !!}
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New Backup</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} [
              </code>
            </p></div>
          </div>

          <!-- Network -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Network</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_7 !!}
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New Allocation</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} [
              </code>
            </p></div>
          </div>

          <!-- Startup -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Startup</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_8 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} M
              </code>
            </p></div>
          </div>

          <!-- Settings -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Settings</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_9 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} L
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Launch SFTP</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} A
              </code>
            </p></div>
          </div>

          <!-- Activity -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Activity</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_0 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} -
              </code>
            </p></div>
          </div>

          <p style="opacity: 0; font-size: 0px;">.</p>
        </div><br>

        <!--Account management-->
        <p class="keybinds-content-text-bold">Account management</p>
        <div class="keybinds-content-text-box">

          <!-- Account -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Account</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_1 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} .
              </code>
            </p></div>
          </div>

          <!-- API -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">API</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_2 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} ,
              </code>
            </p></div>
          </div>

          <!-- SSH -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">SSH</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_3 !!}
              </code>
            </p></div>
          </div>

          <!-- Activity -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Activity</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_4 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} -
              </code>
            </p></div>
          </div>

          <p style="opacity: 0; font-size: 0px;">.</p>
        </div>

        <p class="keybinds-content-text-dim" style="margin-top: 30px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_CTRL !!}</code> Control/Option
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_ALT !!}</code> Alt
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_CMD !!}</code> Command/Meta
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_WIN !!}</code> Windows
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_SHIFT !!}</code> Shift
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_ESCAPE !!}</code> Escape
        </p><p class="keybinds-content-text-dim" style="margin-bottom: 12px; margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_SLASH !!}</code> Slash
        </p>

      </div>
    </div>
    <div class="keybinds-controls">
      <a onclick="hideKeybinds()">
        <button class="keybinds-controls-button" role="button">Close</button>
      </a>
    </div>
  </div>
  <div id="keybindsHideAlert" class="keybinds-close-alert">
    <p>Use <code style="background-color: #2b2a2a; padding: 5px 10px; border-radius: 5px;">{!! $KEY_CTRL !!} {!! $KEY_SLASH !!}</code> to show these keybinds again.</p>
  </div>
@endif
@endif

<!--␀nebula:stop␀-->
        @show
        @section('scripts')
            {!! $asset->js('main.js') !!}
        @show
    </body>
</html>