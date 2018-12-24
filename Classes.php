<?

//Class modeling user.
class user {
		var $ID;
		var $name;
		var $password;
		var $email;
		var $likedshop= array();
		var $dislikedshop= array();

		//these fucntion are the geters and seters for each attribute.

			//Attribute ID
			function set_ID($new_ID) {
				$this->ID = $new_ID;
			}
			function get_name() {
				return $this->ID;
			}

			//Attribute likedshop
			function set_like($shop) {
				$this->likedshop = $shop;
			}
			function get_name() {
				return $this->$likedhop;
			}

			//Attribute Name 
			function set_name($new_name) {
				$this->name = $new_name;
			}
			function get_name() {
				return $this->name;
			}

			//Attribute password.
			function set_pass($new_pass) {
				$this->password = $new_pass;
			}
			function get_pass() {
				return $this->password;
			}

			//Attribute email
			function set_mail($new_email) {
				$this->email = $new_email;
			}
			function get_mail() {
				return $this->email;
			}

			
		//The end of the geters and seters 


		//this function is to add liked shop
			function addliked($shop) {
				array_push($likedshop,$shop);
			}
		//this function is to add liked shop
			function adddisliked($shop) {
				array_push($dislike,$shop);
			}
	}

//class Modeling Shop
class Shop {
		var $ID;
		var $name;
		var $like;
		var $dislike;
		var $distance;

		//these fucntion are the geters and seters for each attribute.


			//Attribute ID
			function set_ID($new_ID) {
				$this->ID = $new_ID;
			}
			function get_name() {
				return $this->ID;
			}

			//Attribute Name 
			function set_name($new_name) {
				$this->name = $new_name;
			}
			function get_name() {
				return $this->name;
			}

			//Attribute password.
			function set_like($new_like) {
				$this->like = $new_like;
			}
			
			function get_like() {
				return $this->like;
			}

			//Attribute email
			function set_dislike($new_dislike) {
				$this->dislike = $new_dislike;
			}
			function get_dislike() {
				return $this->dislike;
			}

			//Attribute Distance
			function set_dist($new_dist) {
				$this->distance = $new_dist;
			}
			function get_dist() {
				return $this->distance;
			}
		//The end of the getters and setters 


		//thse function are for adding or removing like and dislike.
			function add_like()
			{
				set_like(get_like()+1);
			}

			function add_dislike()
			{
				set_dislike(get_dislike()+1)
			}

			function remove_like()
			{
				set_like(get_like()-1);
			}
			
			function remove_dislike()
			{
				set_dislike(get_dislike()-1)
			}
	}





?>