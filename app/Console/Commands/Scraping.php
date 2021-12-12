<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Weidner\Goutte\GoutteFacade;

use App\Models\Event;

use App\Models\Course;
use DateTime;

class Scraping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:scraping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $goutte= GoutteFacade::request('GET', 'https://revspeed.jp/circuit/');
        // $goutte->filter('div.container')->each(function ($a) {
        //     $a->filter('div.summaries-circuit')->each(function($b){
        //         $b->filter('article.summary')->each(function($c){
        //             dd($c->text());
        //         });
        //     });
        // });


        $goutte= GoutteFacade::request('GET', 'https://www.procrews.co.jp/iframe_entry.html');
        $goutte->filter('div#entry')->each(function($a){
            $a->filter('table')->each(function($b){
                $b->filter('tr')->each(function($c){
                    $model_id=0;
                    $c->filter('td')->each(function($d,$i) use($model_id){
                        \Log::info($i);
                            if($i == 0){
                                \Log::info("0のときここを通る");
                                $text=mb_convert_encoding($d->text(), "UTF-8");
                                $model=new Event;
                                $explode=explode('/',$text);
                                $convert=preg_replace('/[^0-9]/','',$explode);
                                $year=date("Y");
                                $date=$year."-".$convert[0]."-".$convert[1];                                       
                                $model->date=$date;
                                $model->save();
                                //日付を保存する処理
                            } elseif($i==1){
                                \Log::info("1のときここを通る");
                                $text=mb_convert_encoding($d->text(), "UTF-8");
                                $model=Event::orderBy('id','desc')->first();
                                $model->name = $text;
                                $model->save();//イベント名を保存する処理
                                $courses = Course::all();
                                foreach($courses as $course){
                                $keyWord = $course->keyword;
                                if(strpos($model->name,$keyWord) !== false){
                                    $id=$course->id;
                                    $model->course_id = $id;
                                    $model->save();//イベント名に合うコースidを保存する処理
                                    }
                                }
                                $url=$d->filter('a')->attr('href');
                                $model->source_url =$url;
                                $model->save();//イベントURLを保存する処理
                            }
                    });
                });
            });
        });
        $text =  mb_convert_encoding($goutte->text(), "UTF-8");
        dd($text);

        



        // $a->filter('')->each(function($){

        // });


        

        // $goutte->filter('table')->each(function($a){
        //     $a->filter('tbody')->each(function($b){
        //         $b->filter('tr')->each(function($c){
        //             $c->filter('td')->each(function($d){
        //                 $d->filter('table')->each(function($e){
        //                     $e->filter('tbody')->each(function($f){
        //                         $f->filter('tr')->each(function($g){
        //                             $g->filter('td')->each(function($h){
        //                                 $h->filter('table')->each(function($i){
        //                                     $i->filter('tbody')->each(function($j){
        //                                         $j->filter('tr')->each(function($k){
        //                                             $k->filter('td')->each(function($l){
        //                                                 $l->filter('table')->each(function($m){
        //                                                     $m->filter('tbody')->each(function($n){
        //                                                         $n->filter('tr')->each(function($o){
        //                                                             $o->filter('td')->each(function($p){
        //                                                                 dd($p->filter('a')->text());
        //                                                             });
        //                                                         });
        //                                                     });
        //                                                 });
        //                                             });
        //                                         });
        //                                     });
        //                                 });
        //                             });
        //                         });
        //                     });
        //                 });
        //             });
        //         });
        //     });
        // });
    }
}