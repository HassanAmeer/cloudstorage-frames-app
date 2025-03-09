<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\settings;
use \App\Models\customroutesmodel;

class customroutes extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Menu Settings';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        // $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        // $host = $_SERVER['HTTP_HOST'];
        // $baseUrl = $requestScheme . '://' . $host;

        $grid = new Grid(new customroutesmodel());

        $grid->model()->whereNotIn('id', [1,2,4,5,6,7,8,9,10,11,18,74]);

        $grid->column('id', __('Id'));
        $grid->column('title', __('Menu Name')); 
        $grid->column('icon', __('Menu icon'))->display(function ($icon) {
            return "<i class='{$icon}'></i>";
        }); 
        


        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });


        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {

        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        // echo $baseUrl;
        // dd("$baseUrl");

        $show = new Show(customroutesmodel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Menu Name'));
        $show->field('icon', __('Menu Icon'));


        
        $show->panel()
        ->tools(function ($tools) {
            // $tools->disableEdit();
            // $tools->disableList();
            $tools->disableDelete();
        });;

        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));
        // $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new customroutesmodel());
        $form->text('title', __('WebsiteName'));
        $form->icon('icon', __('Icon Name'));

        return $form;
    }
}