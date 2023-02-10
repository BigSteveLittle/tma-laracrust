<?php
    // Creates 'namespace' reference for use in other files.
    namespace App\Models;
    //  'CrustListing{}': class will access or list all crust listings.
    class CrustListing {
        //  'all()': function will access or list all crust listings.
        public static function all() {
            return [
            [
                'crustId' => 1,
                'crustTitle' => 'Unrealistically Experienced Junior Front-End Developer',
                'crustDescription' => "Pommy ipsum nose rag queer as a clockwork orange collywobbles and what a doddle it's me peepers, pulled a right corker in the jacksy sweet fanny adams bog roll air one's dirty linen a right corker, goggledegook alright duck 'tis fancy a cuppa teacakes chuffed. Sonic Screwdriver I'm off to Bedfordshire jolly hockey sticks 221B Baker Street upper class fake tan bloody mary a right corker doolally, terribly is she 'avin a laugh Bad Wolf The Hounds of Baskerville posh nosh splendid. Beefeater golly bit of a div put me soaps back on owt gobsmacked, oo ecky thump rather it's me peepers guinness pennyboy, sweets marmite Essex girls bottled it. "
            ],
            [
                'crustId' => 2,
                'crustTitle' => 'Senior Front-End Developer',
                'crustDescription' => "Coffer avast lugsail fire ship parley come about trysail hornswaggle Letter of Marque spirits maroon nipper code of conduct Sink me scourge of the seven seas bounty American Main case shot hail-shot belaying pin. Gally Jolly Roger jack long clothes wherry rum Admiral of the Black fore nipper yard rutters Shiver me timbers case shot red ensign fire in the hole piracy loaded to the gunwalls ye coffer matey. Gold Road cog salmagundi black jack bounty jack Blimey fire ship flogging parley gabion ye parrel cackle fruit rutters Spanish Main pinnace to go on account chantey driver. Aye fire in the hole capstan shrouds lad draught square-rigged come about case shot strike colors bilge water ho grog hands Jolly Roger driver crow's nest bucko log carouser. "
            ],
            [
                'crustId' => 3,
                'crustTitle' => 'Ug! WordPress Developer',
                'crustDescription' => "Yellowbanded perch sandroller scaleless black dragonfish, grenadier, scythe butterfish electric eel staghorn sculpin, masu salmon triggerfish bocaccio zander, 'yellow moray.' Lake chub weeverfish Atlantic eel darter bigscale fish glass knifefish glassfish bat ray bichir tope kaluga? Atlantic cod eel cod zebrafish, Norwegian Atlantic salmon, alligatorfish black bass wobbegong dragonet bluntnose knifefish guitarfish tubeblenny oceanic whitetip shark smooth dogfish New Zealand sand diver. Walking catfish forehead brooder cavefish crocodile icefish, requiem shark peamouth pricklefish? Saber-toothed blenny titan triggerfish yellowfin tuna zebra lionfish Peter's elephantnose fish yellow-edged moray redside Reedfish porcupinefish seahorse roanoke bass. Temperate ocean-bass rocket danio; Sundaland noodlefish murray cod ribbonbearer mudskipper. Fingerfish plaice freshwater shark saury paperbone hog sucker, armored searobin, bonito: eeltail catfish Blacksmelt, 'snook demoiselle,' scorpionfish. "
            ],
            [
                'crustId' => 4,
                'crustTitle' => 'Senior Senior Back-End Developer',
                'crustDescription' => "Monocle ipsum dolor sit amet ryokan extraordinary bespoke finest essential the best iconic elegant Ginza Helsinki pintxos boutique the highest quality. Delightful conversation exquisite Swiss first-class, boutique ANA bespoke classic emerging eclectic iconic liveable. Hand-crafted handsome boulevard Washlet craftsmanship, iconic Scandinavian finest Winkreative espresso quality of life impeccable. Bulletin Boeing 787 first-class classic, Tsutaya craftsmanship eclectic quality of life joy Porter sleepy. Lovely punctual joy, bespoke Toto airport Ginza global emerging Lufthansa artisanal Ettinger extraordinary delightful Nordic. "
            ]

            ];
        }
        // 'find()': function will take in a '$searchId' and list a single crust 
        // that matches the '$crustId'.
        public static function find($searchId) {
            // Access all crusts with the all() function.
            $crusts = self::all();
            // dd($crusts);
            // dd($searchId);
            // Output individual crust information.
            foreach($crusts as $crust) {
                // Check $searchId against 'crustId.'
                if($crust['crustId'] == $searchId) {
                    // Output crust.
                    return $crust;
                }
            }
        }
    }
?>