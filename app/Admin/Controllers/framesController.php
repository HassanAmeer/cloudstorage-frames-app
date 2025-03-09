<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\frames;

class framesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Frames';



    protected $baseUrl = 'baseUrl';
    public function __construct()
    {
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $this->baseUrl = $requestScheme . '://' . $host;
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new frames());

        $grid->column('id', __('Id'));
        $grid->column('show', __('Show'))->switch();
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'))->color('#358784FF')->image($this->baseUrl.'/storage/',75,75);
        $grid->column('price', __('Price (USD)'))->color('#493587FF');
        // $grid->column('uids', __('Uids'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(frames::findOrFail($id));

        $show->field('id', __('Id'));
        // $show->field('show', __('Show'))->using([0 => 'No', 1 => 'Yes']);

        $show->field('show', __('Show'))->as(function ($isActive) {
            return $isActive 
                ? '<span class="label label-success" style="color:green;"><i class="icon-check" style="color:green;"></i> Yes</span>' 
                : '<span class="label label-danger" style="color:red;"><i class="icon-window-close" style="color:red;"></i> No</span>';
        })->unescape(); 

        $show->field('name', __('Name'));
        $show->field('image', __('Image'))->color('#358784FF')->image($this->baseUrl.'/storage/',75,75);
        // $show->field('price', __('Price'));
        $show->field('price', __('Price'))->as(function ($isActive) {
            return '<span class="label label-danger" style="color:blue;"> <i class="icon-currency" style="color:blue;"> </i> $'.number_format($isActive, 2).' </span>';
        })->unescape(); 

        // $show->field('uids', __('Uids'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new frames());

        $form->switch('show', __('Show'));
        $form->text('name', __('Name'));
        $form->html("<br>");
        $form->image('image', __('Image'));
        $form->html("<br>");
        $form->text('price', __('Price'))->default('10');
        // $form->textarea('uids', __('Uids'));

        return $form;
    }
}