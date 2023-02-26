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
        $editpost = $wpadmin . '/post.php?post=' . get_the_ID() . '&action=edit';
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
        $checkupdates = $wpadmin . '/update-core.php';
        $chatgpt = 'https://chat.openai.com/chat';
        $wpreferences = 'https://developer.wordpress.org/reference/';
        $wpcodey = 'https://wpcodey.com/';
        $wpskills = 'https://wp-skills.com/';
        $codewpai = 'https://codewp.ai/app/create/';
        $stackexchange = 'https://wordpress.stackexchange.com/';
        $jquery = 'https://api.jquery.com/';
        $w3css = 'https://www.w3schools.com/w3css/';
        $w3js = 'https://www.w3schools.com/js/';
        $w3php = 'https://www.w3schools.com/php/';
        $w3html = 'https://www.w3schools.com/html/';
        $w3sql = 'https://www.w3schools.com/sql/';
        $w3jquery = 'https://www.w3schools.com/jquery/';
        $w3cssref = 'https://www.w3schools.com/cssref/';
        $w3jsref = 'https://www.w3schools.com/jsref/';
        $w3phpref = 'https://www.w3schools.com/php/php_ref_array.asp';
        $w3htmlref = 'https://www.w3schools.com/tags/default.asp';
        $w3sqlref = 'https://www.w3schools.com/sql/sql_ref_mysql.asp';
        $w3jqueryref = 'https://www.w3schools.com/jquery/jquery_ref_selectors.asp';
        $w3wordpressref = 'https://www.w3schools.com/wordpress/wp_ref_get_posts.asp';
        
        //create logout button when click logout then redirect to home page
        $logout = wp_logout_url(home_url());
        if (is_single() || is_page()) {
            $where = 'dhSingle';
        } else {
            $where = 'dhNonSingle';
        }



?>
        <div id="devHelperPr" class="active">
            <div id="toggleCloseDH" class="active">Close</div>
            <div id="toggleOpenDH" class="active">Open</div>
            <div class="devHelpWr <?php echo $where; ?>">
                <!-- trigger start -->

                <div class="devTriggerWr">
                    <div data-toggle="devwpadmin" class="devTrigger">Wp Admin</div>
                    <div id="devwpadmin" class="devShortcuts inactive">
                        <ul>
                            <li><a target="_blank" href="<?php echo $wpadmin . '/'; ?>">Wp Admin</a></li>
                            <li><a target="_blank" href="<?php echo $checkupdates; ?>">Check Update</a></li>
                            <li><a target="_blank" href="<?php echo $profile; ?>">Profile</a></li>
                            <li><a target="_blank" href="<?php echo $users; ?>">Users</a></li>
                            <li><a target="_blank" href="<?php echo $newuser; ?>">New User</a></li>
                            <li><a target="_blank" href="<?php echo $comments; ?>">Comments</a></li>
                            <li><a target="_blank" href="<?php echo $widgets; ?>">Widget</a></li>
                            <li><a class="dhLogout" target="_blank" href="<?php echo $logout; ?>">Logout</a></li>
                        </ul>
                    </div>
                    <div data-toggle="devcontent" class="devTrigger">Content</div>
                    <div id="devcontent" class="devShortcuts inactive">
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
                    <div id="devthemes" class="devShortcuts inactive">
                        <ul>
                            <li><a target="_blank" href="<?php echo $allthemes; ?>">All Themes</a></li>
                            <li><a target="_blank" href="<?php echo $newtheme; ?>">New Theme</a></li>
                            <li><a target="_blank" href="<?php echo $navmenus; ?>">All Menu</a></li>
                            <li><a target="_blank" href="<?php echo $newmenus; ?>">New Menu</a></li>
                            <li><a target="_blank" href="<?php echo $themefileditor; ?>">Theme File Editor</a></li>
                        </ul>
                    </div>
                    <div data-toggle="devplugins" class="devTrigger">Plugins</div>
                    <div id="devplugins" class="devShortcuts inactive">
                        <ul>
                            <li><a target="_blank" href="<?php echo $allplugins; ?>">All Plugins</a></li>
                            <li><a target="_blank" href="<?php echo $newplugin; ?>">New Plugin</a></li>
                            <li><a target="_blank" href="<?php echo $plugineditor; ?>">Plugin Editor</a></li>
                        </ul>
                    </div>
                    <div data-toggle="devmedia" class="devTrigger">Media</div>
                    <div id="devmedia" class="devShortcuts inactive">
                        <ul>
                            <li><a target="_blank" href="<?php echo $medialibrary; ?>">Media Library</a></li>
                            <li><a target="_blank" href="<?php echo $uploadmedia; ?>">Upload New Media</a></li>
                        </ul>
                    </div>
                    <div data-toggle="helperReferences" class="devTrigger">Helper</div>
                    <div id="helperReferences" class="devShortcuts inactive">
                        <ul class="dhTwoCol">
                            <li><a target="_blank" href="<?php echo $chatgpt; ?>">Chat GPT</a></li>
                            <li><a target="_blank" href="<?php echo $wpreferences; ?>">Wordpress Reference</a></li>
                            <li><a target="_blank" href="<?php echo $wpcodey; ?>">WpCodey</a></li>
                            <li><a target="_blank" href="<?php echo $wpskills; ?>">WPSkills</a></li>
                            <li><a target="_blank" href="<?php echo $codewpai; ?>">CodeWpAi</a></li>
                            <li><a target="_blank" href="<?php echo $stackexchange; ?>">Stackexchange</a></li>
                            <li><a target="_blank" href="<?php echo $jquery; ?>">Jquery</a></li>
                            <!-- w3css -->
                            <li><a target="_blank" href="<?php echo $w3css; ?>">W3 CSS</a></li>
                            <li><a target="_blank" href="<?php echo $w3js; ?>">W3 JS</a></li>
                            <li><a target="_blank" href="<?php echo $w3jquery; ?>">W3 Jquery</a></li>
                            <li><a target="_blank" href="<?php echo $w3html; ?>">W3 HTML</a></li>
                            <li><a target="_blank" href="<?php echo $w3php; ?>">W3 PHP</a></li>
                            <li><a target="_blank" href="<?php echo $w3sql; ?>">W3 SQL</a></li>
                            <li><a target="_blank" href="<?php echo $w3cssref; ?>">W3 CSS Ref</a></li>
                            <li><a target="_blank" href="<?php echo $w3jsref; ?>">W3 Js Ref</a></li>
                            <li><a target="_blank" href="<?php echo $w3jqueryref; ?>">W3 Jquery Ref</a></li>
                            <li><a target="_blank" href="<?php echo $w3sqlref; ?>">W3 SQL Ref</a></li>
                        </ul>
                    </div>
                </div>
                <!-- trigger end -->
                <!-- shortcut start -->
                <?php
                if (is_single() || is_page()) {
                ?>
                    <div class="shortCutWr">
                        <!-- for post start -->
                        <?php
                        if (is_single()) {
                            ?>
                            <a href="<?php echo $editpost; ?>"><i class="fas fa-pencil-alt"></i>Edit Post</a>

                            <a href="<?php echo $newpost; ?>"><i class="fas fa-pencil-alt"></i>New Post</a>
                            <?php
                        } elseif (is_page()) {
                            ?>
                            <a href="<?php echo $editpost; ?>"><i class="fas fa-pencil-alt"></i>Edit Page</a>
                            
                            <a href="<?php echo $newpage; ?>"><i class="fas fa-pencil-alt"></i>New Page</a>
                        <?php
                        }
                        ?>
                        <!-- for post end -->
                        <!-- for page start -->
                        <!-- for page end -->
                    </div>
                <?php
                }
                ?>

                <!-- shortcut end -->
            </div>
        </div>

<?php
    } else {
        return;
    }
}

add_action('wp_footer', 'dev_helper_workspace');
