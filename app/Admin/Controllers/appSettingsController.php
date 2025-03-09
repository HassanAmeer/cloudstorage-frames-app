<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\appSettings;

class appSettingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App Settings';





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
        $grid = new Grid(new appSettings());

        $grid->column('id', __('Id'));
        $grid->column('appName', __('App Name'));
        $grid->column('appLogo', __('App Logo'))->image($this->baseUrl.'/storage/',75,75);
        $grid->column('showEmail', __('Show Email'))->switch();;
        $grid->column('email', __('Email'));
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
        $show = new Show(appSettings::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('appName', __('App Name'));
        $show->field('appLogo', __('App Logo'))->image($this->baseUrl.'/storage/',75,75);
        $show->field('showEmail', __('Show Email'));
        $show->field('email', __('Email'));
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
        $form = new Form(new appSettings());

        $form->text('appName', __('App Name'));
        $form->image('appLogo', __('App Logo'));

        $form->html("<br>");
        $form->switch('showEmail', __('Show Email'));
        $form->email('email', __('Email'));

        return $form;
    }
}