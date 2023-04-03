<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function tour(){

        $posti=[
            ['name'=> 'Central Park' , 'description' => 'Il parco più grande', 'img' => 'https://www.lastrolabio.it/wp-content/uploads/2022/07/central-park.jpg'],
            ['name'=> 'Empire State Building' , 'description' => 'Il grattacielo più famoso', 'img' => 'https://media.timeout.com/images/105717962/750/422/image.jpg'],
            ['name'=> 'Statua della Libertà' , 'description' => 'Il Simbolo di New York', 'img' => 'https://www.columbusassicurazioni.it/media/30965/newyork_statueofliberty-min.jpg'],
            ['name'=> 'Ponte di Brooklyn' , 'description' => 'Il primo ponte costruito in acciaio', 'img' => 'https://www.viaggi-usa.it/wp-content/uploads/2017/09/Ponte-di-Brooklyn-cosa-vedere-e-come-attraversarlo.jpg'],
            ['name'=> 'Times Square' , 'description' => 'Uno dei più grandi incroci di New York', 'img' => 'https://i0.wp.com/usatravelphotos.it/wp-content/uploads/2020/08/Times-Square.jpg'],
            // ['name'=> 'Rockefeller Center' , 'description' => 'Un gruppo di 19 edifici commerciali di New York, sito in Manhattan', 'img' => 'https://www.lastrolabio.it/wp-content/uploads/2022/07/central-park.jpg'],
            ['name'=> "National September 11 Memorial Museum" , 'description' => 'Un organizzazione che raccoglie fondi per costruire il memoriale e il museo in ricordo degli attentati dell 11 settembre 2001.', 'img' => 'https://media.wnyc.org/i/1500/1000/h/80/1/Pavilion_view_North_Pool_night_credit_Amy_Dreher_1.JPG'],
            ];


        return view('tour', ['posti'=> $posti]);
       
    }
    
}
