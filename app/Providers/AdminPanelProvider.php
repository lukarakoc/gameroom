<?php

namespace App\Providers;

use App\Blog;
use App\PCSony;
use App\Tournaments;
use Illuminate\Support\ServiceProvider;

class AdminPanelProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['admin.index', 'index'], function($view) {

            $PC1 = PCSony::find(1);
            $PC2 = PCSony::find(2);
            $PC3 = PCSony::find(3);
            $PC4 = PCSony::find(4);
            $PC5 = PCSony::find(5);
            $PC6 = PCSony::find(6);
            $PC7 = PCSony::find(7);
            $PC8 = PCSony::find(8);
            $PC9 = PCSony::find(9);
            $PC10 = PCSony::find(10);
            $PC11 = PCSony::find(11);
            $PC12 = PCSony::find(12);
            $PC13 = PCSony::find(13);
            $PC14 = PCSony::find(14);
            $PC15 = PCSony::find(15);

            $SONY1 = PCSony::find(16);
            $SONY2 = PCSony::find(17);
            $SONY3 = PCSony::find(18);

            $freePC = PCSony::where('status', false)->where('type', 'pc')->get();
            $freeSony = PCSony::where('status', false)->where('type', 'sony')->get();

            $last_update = PCSony::orderBy('updated_at', 'desc')->first()->updated_at;

            $tournament = Tournaments::latest()->first();
            $blogs = Blog::latest()->limit(3)->get();
            $view->with('PC1', $PC1)
                ->with('PC2', $PC2)
                ->with('PC3', $PC3)
                ->with('PC4', $PC4)
                ->with('PC5', $PC5)
                ->with('PC6', $PC6)
                ->with('PC7', $PC7)
                ->with('PC8', $PC8)
                ->with('PC9', $PC9)
                ->with('PC10', $PC10)
                ->with('PC11', $PC11)
                ->with('PC12', $PC12)
                ->with('PC13', $PC13)
                ->with('PC14', $PC14)
                ->with('PC15', $PC15)
                ->with('SONY1', $SONY1)
                ->with('SONY2', $SONY2)
                ->with('SONY3', $SONY3)
                ->with('freePC', $freePC)
                ->with('freeSony', $freeSony)
                ->with('last_update', $last_update)
                ->with('tournament', $tournament)
                ->with('blogs', $blogs);
        });
    }
}
