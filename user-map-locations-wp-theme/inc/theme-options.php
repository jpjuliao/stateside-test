<?php

/**
 * Theme Menu Item
 */
function theme_menu_item()
{
  add_theme_page("Theme Customization", "Theme Customization", "manage_options", "theme-options", "theme_option_page", null, 99);
}

add_action("admin_menu", "theme_menu_item");

/**
 * Options Page Template
 */
function theme_option_page()
{
?>
  <div class="wrap">
    <h1>Custom Theme Options Page</h1>
    <form method="post" action="options.php">
      <?php
      // display settings field on theme-option page
      settings_fields("theme-options-grp");
      // display all sections for theme-options page
      do_settings_sections("theme-options");
      submit_button();
      ?>
    </form>
  </div>
<?php
}

/**
 * Settings API Init
 */
function theme_settings_api_init()
{

  add_settings_section(
    'setting_section',
    'Example settings section in reading',
    'theme_setting_section_callback',
    'reading'
  );

  add_settings_field(
    'setting_name',
    'Example setting Name',
    'theme_setting_callback',
    'reading',
    'setting_section'
  );

  register_setting('reading', 'setting_name');
}

add_action('admin_init', 'theme_settings_api_init');

/**
 * Settings Section Callback
 */

function theme_setting_section_callback()
{
  echo '<p>Intro text for our settings section</p>';
}

/**
 * Settings Callback
 */
function theme_setting_callback()
{
  echo '<input name="setting_name" id="setting_name" type="checkbox" value="1" class="code" ' . checked(1, get_option('setting_name'), false) . ' /> Explanation text';
}



// ----------------------------------------------------------------

// function theme_section_description()
// {
//   echo '<p>Theme Option Section</p>';
// }

// function options_callback()
// {
//   $options = get_option('first_field_option');
//   echo '<input name="first_field_option" id="first_field_option" type="checkbox" value="1" class="code" ' . checked(1, $options, false) . ' /> Check for enabling custom help text.';
// }

// function test_theme_settings()
// {
//   add_option('first_field_option', 1); // add theme option to database
//   add_settings_section(
//     'first_section',
//     'New Theme Options Section',
//     'theme_section_description',
//     'theme-options'
//   );
//   add_settings_field(
//     'first_field_option',
//     'Test Settings Field',
//     'options_callback',
//     'theme-options',
//     'first_section'
//   ); //add settings field to the “first_section”
//   register_setting('theme-options-grp', 'first_field_option');
// }
// add_action('admin_init', 'test_theme_settings');



