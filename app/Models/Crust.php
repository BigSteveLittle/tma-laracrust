<?php
    // 1. 'namespace': declare file as a Model.
    namespace App\Models;
    // 2. 'Crusting': this class will display aLL crust information.
    class Crust {
        // 2a. 'all()': this function will access all crusts.
        public static function all() {
            return [
                [
                    'crustId' => 1,
                    'crustTitle' => 'Junior Laravel Developer',
                    'crustDescription' => 'Sutler swing the lead black spot hempen halter Plate Fleet American Main brigantine Buccaneer walk the plank ballast handsomely shrouds salmagundi yard line jury mast grapple skysail gunwalls scurvy. Spanker crack Jennys tea cup landlubber or just lubber aft snow draft hulk shrouds Chain Shot reef sails man-of-war bilge rat spyglass bucko scuppers lookout run a shot across the bow Brethren of the Coast topmast provost. Black spot cackle fruit careen marooned measured fer yer chains bucko gun pillage Plate Fleet bilged on her anchor scallywag lateen sail Shiver me timbers ballast stern splice the main brace clap of thunder black jack gangplank matey.'
                ],
                [
                    'crustId' => 2,
                    'crustTitle' => 'Senior Laravel Developer',
                    'crustDescription' => "Godfather ipsum dolor sit amet. What's wrong with being a lawyer? You talk about vengeance. Is vengeance going to bring your son back to you? Or my boy to me? Only don't tell me you're innocent. Because it insults my intelligence and makes me very angry. Leave the gun. Take the cannoli."
                ]
            ];
        }
        // 2b. 'find()': function will gather and display search results.
        public static function find($searchId) {
            // 2b1. '$crusts': gathers all crusts information.
            $crusts = self::all();
            // 2b2. '$crusting': function will check for '$searchId'.
            foreach($crusts as $crust) {
                if($crust['crustId'] === $searchId) {
                    return $crust;
                }
            }
        }
    }
?>