<?php

use EvolutionCMS\Facades\ManagerTheme;
use EvolutionCMS\Models\SiteTemplate;
use EvolutionCMS\Models\SiteTmplvarTemplate;

if (!defined('IN_MANAGER_MODE') || IN_MANAGER_MODE !== true) {
    die('<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the EVO Content Manager instead of accessing this file directly.');
}
if (!evo()->hasPermission('new_template')) {
    evo()->webAlertAndQuit(__('global.error_no_privileges'));
}

$id = (int) ($_GET['id'] ?? 0);

if (!$id) {
    evo()->webAlertAndQuit(__('global.error_no_id'));
}

// count duplicates
$name = SiteTemplate::query()->select('templatename')->findOrFail($id)->templatename;
$count =
    SiteTemplate::query()->where('templatename', 'LIKE', $name . ' ' . __('global.duplicated_el_suffix') . "%'")
        ->count();
if ($count >= 1) {
    $count = ' ' . ($count + 1);
} else {
    $count = '';
}

// duplicate template
$template = SiteTemplate::query()->select('templatename', 'description', 'content', 'category')
    ->findOrFail($id);
$templateNew = $template->replicate();
$templateNew->templatename .= ' ' . __('global.duplicated_el_suffix') . $count;
$templateNew->save();
$newid = $templateNew->id;

// duplicate TV values
SiteTmplvarTemplate::query()
    ->select('tmplvarid', 'templateid', 'rank')
    ->where('templateid', $id)->get()
    ->each(function ($item) use ($newid) {
        $item->templateid = $newid;
        $item->replicate()->save();
    });

// Set the item name for logger
$name = SiteTemplate::query()->select('templatename')->findOrFail($newid)->templatename;
$_SESSION['itemname'] = $name;

// finish duplicating - redirect to new template
header('Location: index.php?r=2&a=16&id=' . $newid);
