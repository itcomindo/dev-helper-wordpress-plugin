<?php
defined('ABSPATH') || exit;

function dev_helper_workspace()
{
    // if user is administrator and logged in
    if (current_user_can('administrator') && is_user_logged_in()) {
    


    $blog = get_bloginfo('url');
    $wpadmin = $blogUrl . '/wp-admin';
    $allpost = $wpadmin . '/edit.php';
    $newpost = $wpadmin . '/post-new.php';
    $allpage = $wpadmin . '/edit.php?post_type=page';
    $newpage = $wpadmin . '/post-new.php?post_type=page';
    $medialibrary = $wpadmin . '/upload.php';
    $uploadmedia = $wpadmin . '/media-new.php';
    $alltags = $wpadmin . '/edit-tags.php?taxonomy=post_tag';
    $newtag = $wpadmin . '/edit-tags.php?action=add&taxonomy=post_tag';
    $allcategories = $wpadmin . '/edit-tags.php?taxonomy=category';
    $newcategory = $wpadmin . '/edit-tags.php?action=add&taxonomy=category';
    $allplugins = $wpadmin . '/plugins.php';
    $newplugin = $wpadmin . '/plugin-install.php';
    $allthemes = $wpadmin . '/themes.php';
    $newtheme = $wpadmin . '/theme-install.php';
    $themefileditor = $wpadmin . '/theme-editor.php';
    $navmenus = $wpadmin . '/nav-menus.php';
    $newmenus = $wpadmin . '/nav-menus.php?action=edit&menu=0';
    $plugineditor = $wpadmin . '/plugin-editor.php';
    $widgets = $wpadmin . '/widgets.php';
    $comments = $wpadmin . '/edit-comments.php';
    $settings = $wpadmin . '/options-general.php';
    $reading = $wpadmin . '/options-reading.php';
    $writing = $wpadmin . '/options-writing.php';
    $discussion = $wpadmin . '/options-discussion.php';
    $mediasettings = $wpadmin . '/options-media.php';
    $permalinks = $wpadmin . '/options-permalink.php';
    $users = $wpadmin . '/users.php';
    $newuser = $wpadmin . '/user-new.php';
    $profile = $wpadmin . '/profile.php';
    $tools = $wpadmin . '/tools.php';
    $import = $wpadmin . '/import.php';
    $export = $wpadmin . '/export.php';
    $sitehealth = $wpadmin . '/site-health.php';
    $sitehealthInfo = $wpadmin . '/site-health.php?tab=info';
    $checkupdates = $wpadmin . '/update-core.php';
    //create logout button when click logout then redirect to home page
    $logout = wp_logout_url(home_url());
    


?>
    <div id="devHelperPr" class="active">
        <div id="toggleCloseDH" class="active">Close</div>
        <div id="toggleOpenDH" class="active">Open</div>
        <div class="devHelpWr">
            <!-- trigger start -->
            <div class="devTriggerWr">
                <div data-toggle="devwpadmin" class="devTrigger">Wp Admin</div>
                <div id="devwpadmin" class="inactive devShortcuts">
                    <ul>
                        <li><a target="_blank" href="<?php echo $wpadmin . '/'; ?>">Wp Admin</a></li>
                        <li><a target="_blank" href="<?php echo $logout; ?>">Logout</a></li>
                    </ul>
                </div>
                <div data-toggle="devcontent" class="devTrigger">Content</div>
                <div id="devcontent" class="inactive devShortcuts">
                    <ul>
                        <li><a target="_blank" href="<?php echo $allpost; ?>">All Posts</a></li>
                        <li><a target="_blank" href="<?php echo $newpost; ?>">New Posts</a></li>
                        <li><a target="_blank" href="<?php echo $allpage; ?>">All Pages</a></li>
                        <li><a target="_blank" href="<?php echo $newpage; ?>">New Page</a></li>
                        <li><a target="_blank" href="<?php echo $allcategories; ?>">All Categories</a></li>
                        <li><a target="_blank" href="<?php echo $newcategory; ?>">New Category</a></li>
                        <li><a target="_blank" href="<?php echo $alltags; ?>">All Tags</a></li>
                        <li><a target="_blank" href="<?php echo $newtag; ?>">New Tag</a></li>
                    </ul>
                </div>

                <div data-toggle="devthemes" class="devTrigger">Themes</div>
                <div id="devthemes" class="inactive devShortcuts">
                    <ul>
                        <li><a target="_blank" href="<?php echo $allthemes; ?>">All Themes</a></li>
                        <li><a target="_blank" href="<?php echo $newtheme; ?>">New Theme</a></li>
                        <li><a target="_blank" href="<?php echo $navmenus; ?>">All Menu</a></li>
                        <li><a target="_blank" href="<?php echo $newmenus; ?>">New Menu</a></li>
                        <li><a target="_blank" href="<?php echo $themefileditor; ?>">Theme File Editor</a></li>
                    </ul>
                </div>
                <div data-toggle="devplugins" class="devTrigger">Plugins</div>
                <div id="devplugins" class="inactive devShortcuts">
                    <ul>
                        <li><a target="_blank" href="<?php echo $allplugins; ?>">All Plugins</a></li>
                        <li><a target="_blank" href="<?php echo $newplugin; ?>">New Plugin</a></li>
                        <li><a target="_blank" href="<?php echo $plugineditor; ?>">Plugin Editor</a></li>
                    </ul>
                </div>
                <div data-toggle="devmedia" class="devTrigger">Media</div>
                <div id="devmedia" class="inactive devShortcuts">
                    <ul>
                        <li><a target="_blank" href="<?php echo $medialibrary; ?>">Media Library</a></li>
                        <li><a target="_blank" href="<?php echo $uploadmedia; ?>">Upload New Media</a></li>
                    </ul>
                </div>
            </div>
            <!-- trigger end -->
            <!-- shortcut start -->
            <div class="shortCutWr"></div>
            <!-- shortcut end -->
        </div>
    </div>

<?php
    } else {
        return;
    }
}

add_action('wp_footer', 'dev_helper_workspace');
