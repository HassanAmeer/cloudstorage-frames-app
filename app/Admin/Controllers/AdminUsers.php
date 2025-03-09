<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\AdminUsersM;


class AdminUsers extends AdminController
{
     /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = ' Users By Admin';


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
        $grid = new Grid(new AdminUsersM());
        $grid->filter(function ($filter) {
            $filter->equal('id', 'By User')->select(AdminUsersM::all()->pluck('username', 'id'));
        });


        $grid->model()->whereNotIn('id', [1]);
        
        $grid->column('id', __('Id'));
        // $grid->column('uid', __('Uid'));
   

        $grid->column('avatar', __('Avatar'))->color('#358784FF')->image($this->baseUrl.'/storage/',75,75);
        $grid->column('username', __('User Name'));
        $grid->column('name', __('Name'))->color('black');
        $grid->column('password', __('Password'))->color('silver');
        // $grid->column('subscription', __('Descibed'));
        // $grid->column('remember_token', __('Descibed'));
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
        $show = new Show(AdminUsersM::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('avatar', __('Avatar'))->color('#358784FF')->image($this->baseUrl.'/storage/',75,75);
        $show->field('username', __('User Name'));
        $show->field('name', __('Name'))->color('black');
        $show->field('password', __('Password'))->as(function ($password) {
            return <<<HTML
                <span class="label label-light" style="color:silver;">
                    <i class="icon-key" style="color:silver;"></i> {$password}
                </span>
            HTML;
        })->unescape();
        

        $show->divider();
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
        $form = new Form(new AdminUsersM());

        // $form->text('uid', __('Uid'))->default('00');
        // $form->select('uid', 'Uploaded By User')
        // ->options(appUsers::all()->pluck('name', 'id'))
        // ->rules('required')
        // ->default(function ($form) {
        //     return $form->model()->uid; // Pre-fill with the current value if editing
        // });

        $form->image('avatar', __('Avatar'));
        $form->text('username', __('User Name'));
        $form->text('name', __('Name'));
        
        $form->text('password', __('Password'))->creationRules('required')->updateRules('nullable');

        // $2y$12$kubQmshzMV48ybp1csZg5.TZW33oBki59eKrROVKWw1zaWIDxHk9S	
        // Hash the password before saving
        $form->saving(function ($form) {
            if ($form->password) {
                $form->password = bcrypt($form->password);
            }
        });
        


        return $form;
    }
}