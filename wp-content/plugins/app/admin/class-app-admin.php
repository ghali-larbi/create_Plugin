<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://wppb.me/
 * @since      1.0.0
 *
 * @package    App
 * @subpackage App/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    App
 * @subpackage App/admin
 * @author     ghali <larbighali89@gmail.com>
 */
class App_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in App_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The App_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

	//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/app-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in App_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The App_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/app-admin.js', array( 'jquery' ), $this->version, false );

	}
public function appPlugin(){
	function myplugin_register_settings() {
		add_option( 'myplugin_option_name', 'This is my option value.');
		register_setting( 'myplugin_options_group', 'myplugin_option_name', 'myplugin_callback' );
	 }
	 add_action( 'admin_init', 'myplugin_register_settings' );

	 add_menu_page("appPlugin","app Plugin","manage_options","app-Plugin",array($this,"app_plugin_plugin"),"dashicons-admin-multisite
	");
	add_submenu_page("app-Plugin","dashboard","dashboard","manage_options","app-Plugin",array($this,"app_plugin_plugin"));
	add_options_page('appPlugin', 'appPlugin', 'manage_options', 'appPlugin', 'myplugin_options_page');
	add_submenu_page("app-Plugin","settings","settings","manage_options","app-Plugin-settings",array($this,"app_Plugin_settings"));
}

public function app_plugin_plugin(){
	echo "<h1>plugin information</h1><div>This is a short description of what the plugin does. It's displayed in the WordPress admin area.
	<br>Version 1.0.0 | By ghali |</div>";
	 global $wpdb;
	 $data=$wpdb->get_results($wpdb->prepare("select * from settings"));
	?>
	<h1>affichage informations</h1>

	<table class="table table-hover col-8" >
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">nom</th>
      <th scope="col">text</th>
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($data)>0)
		 {
		  foreach($data as $row=>$data){ ?>
    <tr >
      
      <td><?php echo $data->nom?></td>
      <td><?php echo $data->nom?></td>
      <td><?php echo $data->options?></td>
    </tr>
	<?php }
		      }
		?>
  </tbody>
</table>
	<?php
}
// public function app_plugin_dashboard(){
// 	echo "<h3>welcome to app configuration</h3>";
// }

 public function myplugin_options_page()
{
	global $wpdb;
	if(isset($_POST["save"])){
		$nom=$_POST["name"];
		$text=$_POST["textarea"];
		$option=$_POST["option"];
		$query="insert into settings values('".$nom."','".$text."','".$option."')";
		$wpdb->query($query);
	}
?>
  <div>
  <?php screen_icon(); ?>
  <h1>My Plugin settings</h1>
  <form method="post" >
  <?php settings_fields( 'myplugin_options_group' ); ?>
  <table>
  <tr valign="top">
  <th scope="row"><label for="myplugin_option_name">nom</label></th>
  <td ><input type="text" id="myplugin_option_name" name="name" value="" /></td>
  </tr>
  <tr valign="top" >
  <th scope="row"><label for="myplugin_option_name">text</label></th>
  <td><textarea name="textarea" cols="30" rows="3"></textarea></td>
  </tr>
  <tr valign="top">
  <th scope="row"><label for="myplugin_option_name">option</label></th>
  <td><select name="option" id="">
  <option value="option1">option1</option>
  <option value="option2">option2</option>
  <option value="option3">option3</option>
  </select></td>
  </tr>
  </table>
  <button type="submit" name="save" class="btn btn-primary btn-sm" style="margin-top:10px;margin-left:50px">save change</button>
  </form>
  </div>
<?php
} 
public function app_Plugin_settings(){
	$this->myplugin_options_page();
}


}
?>