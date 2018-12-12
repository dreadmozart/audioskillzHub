<?php
require_once $global['systemRootPath'] . 'objects/category.php';
require_once $global['systemRootPath'] . 'objects/video.php';
require_once $global['systemRootPath'] . 'objects/userGroups.php';
$userGroups = UserGroups::getAllUsersGroups();

unset($_SESSION['type']);
if (!empty($_GET['video_id'])) {
    if (Video::canEdit($_GET['video_id'])) {
        $row = Video::getVideo($_GET['video_id']);
    }
}
?>
<link href="<?php echo $global['webSiteRootURL']; ?>view/js/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $global['webSiteRootURL']; ?>view/js/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $global['webSiteRootURL']; ?>view/js/bootstrap-fileinput/js/fileinput.min.js" type="text/javascript"></script>
<link href="<?php echo $global['webSiteRootURL']; ?>view/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $global['webSiteRootURL']; ?>view/js/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script>
    /*** Handle jQuery plugin naming conflict between jQuery UI and Bootstrap ***/
    $.widget.bridge('uibutton', $.ui.button);
    $.widget.bridge('uitooltip', $.ui.tooltip);
</script>
<style>
    #inputNextVideo-poster {
        height: 90px;
        width: 160px;
    }
    .ui-autocomplete{
        z-index: 9999999;
    }
    .krajee-default.file-preview-frame {
        min-width: 300px;
    }
</style>
