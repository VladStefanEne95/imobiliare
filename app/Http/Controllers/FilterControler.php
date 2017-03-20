<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FilterControler extends Controller
{
//    public function check_price($filtru)
//    {
//        if (strpos ($filtru, 'p') > -1){
//
//            if (strpos ($filtru, 'p1') > -1){
//                $lower_price = 0;
//                $higher_price = 20000;
//            }
//            else if (strpos ($filtru, 'p2') > -1){
//                $lower_price = 20000;
//                $higher_price = 40000;
//            }
//
//            else if (strpos ($filtru, 'p3') > -1){
//                $lower_price = 40000;
//                $higher_price = 60000;
//            }
//            else if (strpos ($filtru, 'p4') > -1){
//                $lower_price = 60000;
//                $higher_price = 80000;
//            }
//
//            else if (strpos ($filtru, 'p5') > -1){
//                $lower_price = 80000;
//                $higher_price = 100000;
//            }
//            else if (strpos ($filtru, 'p6') > -1){
//                $lower_price = 100000;
//                $higher_price = 150000;
//            }
//            else if (strpos ($filtru, 'p7') > -1){
//                $lower_price = 150000;
//                $higher_price = 300000;
//            }
//            else if (strpos ($filtru, 'p8') > -1){
//                $lower_price = 300000;
//                $higher_price = 600000;
//            }
//
//            return array ($lower_price, $higher_price);
//        }
//    }


    public function number_of_rooms($filtru)
    {
        $aux_first = strpos($filtru,'c');
        $aux_second = strrpos($filtru,'c');
        $i = 0;
        if ($aux_first > -1){

            for ( $i = $aux_second + 1;$i < strlen($filtru); $i++)
                if (!is_numeric($filtru[$i])){
                    break;
                }

            $aux2 = substr($filtru, $aux_first, $i-$aux_first  );
            $room1 = substr ($filtru, $aux_first + 1, $aux_second - $aux_first - 1);
            $room2 = substr ($aux2 ,$aux_second - $aux_first + 1 );
            return array($room1, $room2);
        }
        return null;
    }

    public function price_range($filtru)
    {
        $aux_first = strpos($filtru,'p');
        $aux_second = strrpos($filtru,'p');
        $i = 0;
        if ($aux_first > -1){

            for ( $i = $aux_second + 1;$i < strlen($filtru); $i++)
                if (!is_numeric($filtru[$i])){
                    break;
                }

            $aux2 = substr($filtru, $aux_first, $i-$aux_first  );
            $price1 = substr ($filtru, $aux_first + 1, $aux_second - $aux_first - 1);
            $price2 = substr ($aux2 ,$aux_second - $aux_first + 1 );
            return array($price1, $price2);
        }
        return null;
    }



    public function parse_arguments($filtre)
    {
        $result = array();
        if ( isset ($filtre[0] ) && $filtre[0] == $filtre[1])
            array_push($result, ['nr_camere','=', $filtre[0]]);
        else {
            if (isset ($filtre[0]))
                array_push($result, ['nr_camere', '>', $filtre[0]]);
            if (isset ($filtre[1]))
                array_push($result, ['nr_camere', '<', $filtre[1]]);
        }
        if ( isset ($filtre[2]))
            array_push($result, ['pret','>', $filtre[2]]);
        if ( isset ($filtre[3]))
            array_push($result, ['pret','<', $filtre[3]]);
        return $result;
    }
    public function universal_filter($filtru , $val)
    {

        $aux_price = $this->price_range($filtru);
        $lower_price = $aux_price[0];
        $higher_price = $aux_price[1];
        $aux_nr_camere = $this->number_of_rooms($filtru);
        $arguments = array();
        array_push($arguments, $aux_nr_camere[0],$aux_nr_camere[1], $lower_price,$higher_price);
        $result = $this->parse_arguments($arguments);

        $users = \DB::table('anunturi')->where($result)->get();

        return view('lista_anunturi')->with(['users'=>$users,'link'=>$filtru]);
    }
    public function display(Request $request )
    {

                $filtru = $request->input('filtru');
                $valoare = $request->input('valoare');

                if (isset ($filtru) == FALSE)
                    return view('lista_anunturi');

                return $this->universal_filter($filtru, $valoare);

    }
}