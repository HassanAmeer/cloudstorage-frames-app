<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\contactUs;

class contactUsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact Us';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new contactUs());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))->color('indigo');
        $grid->column('email', __('Email'))->display(function ($email) {
            $emailUrl = "mailto:{$email}?subject=Reply";
            return <<<HTML
                <div style="display: flex; align-items: center;">
                    <a href="{$emailUrl}" style="color: #358784FF; text-decoration: none;">  <i class="icon-paper-plane" style="margin-right: 8px; color: #22CBC5FF;"></i> {$email}</a>
                </div>
            HTML;
        });
        $grid->column('message', __('Message'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(contactUs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('message', __('Message'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new contactUs());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->textarea('message', __('Message'));

        return $form;
    }
}