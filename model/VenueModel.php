<?php
class VenueModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'venuefind');
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function searchVenues($location, $type, $capacity) {
        $query = "SELECT * FROM venues WHERE location LIKE ? AND type LIKE ? AND capacity >= ?";
        $stmt = $this->db->prepare($query);

        $location = "%$location%";
        $type = "%$type%";

        $stmt->bind_param("ssi", $location, $type, $capacity);
        $stmt->execute();
        $result = $stmt->get_result();

        $venues = [];
        while ($row = $result->fetch_assoc()) {
            $venues[] = $row;
        }

        return $venues;
    }
}
?>
