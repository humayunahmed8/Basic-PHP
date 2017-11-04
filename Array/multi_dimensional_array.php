<?php 

        // Multidimensional Array (বহুমাত্রিক)

        // Demo_1

        $father = array(
            'humayun'=>array('age'=>'20','blood'=>'A+','height'=>'5.6'),
            'farhad'=>array('age'=>'18','blood'=>'A-','height'=>'5.4'),
            'ramim'=>array('age'=>'16','blood'=>'B+','height'=>'5.2'),
            'rasel'=>array('age'=>'15','blood'=>'AB+','height'=>'5.0')
        );

        //print_r($father); (use for check array serial)

        echo $father['rasel']['blood'].'<br>';

        // Demo_2

        
        $father = array(
            'humayun'=>array('age'=>'20','sub'=>'cse','hobby'=>'coding'),
            'foysal'=>array('age'=>'15','sub'=>'bangla','hobby'=>'reading'),
            'fariya'=>array('age'=>'12','sub'=>'general','hobby'=>'playing'),
            'jahanara'=>array('age'=>'10','sub'=>'math','hobby'=>'facebooking')
        );

        echo $father['jahanara']['hobby'];

?>