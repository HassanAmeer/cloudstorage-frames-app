<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\notify;
use \App\Models\appUsers;

class notifyContoller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'notify';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new notify());

        $grid->column('id', __('Id'));
        // $grid->column('uid', __('User'));
        $grid->column('uid', 'By User')->display(function () {
            $user = $this->byuid;
            if ($user) {
                $imageUrl = url("storage/{$user->img}");
                $fallbackImage = 'https://img.freepik.com/premium-vector/vector-illustration-gray-silhouette-teen-boy-white-background-suitable-social-media-profiles-icons-screensavers-as-templatex9xa_719432-1277.jpg?semt=ais_hybrid';
                $profileUrl = url("admin/app-users/{$user->id}");
                
                return <<<HTML
                    <div style="text-align: center;">
                        <img src="{$imageUrl}" alt="User Image" onerror="this.src='{$fallbackImage}'" 
                             style="width: 55px; height: 50px; object-fit: cover; border-radius: 5px;" />
                        <div style="margin-top: 10px;">
                            <a href="{$profileUrl}" target="_blank" class="icon-eye" style="text-decoration: none; color: #0090b4;">
                                <span class="user-name">{$user->name}</span>
                            </a>
                        </div>
                    </div>
                HTML;
            }
            return '<span style="color: #999;">Empty</span>';
        });
        $grid->column('title', __('Title'));
        $grid->column('desc', __('Description'))->color('silver');
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
        $show = new Show(notify::findOrFail($id));

        $show->field('id', __('Id'));
        // $show->field('uid', __('User'));
        $show->field('uid', 'By User')->as(function () {
            $user = $this->byuid;
            if ($user) {
                $imageUrl = url("storage/{$user->img}");
                $fallbackImage = 'https://img.freepik.com/premium-vector/vector-illustration-gray-silhouette-teen-boy-white-background-suitable-social-media-profiles-icons-screensavers-as-templatex9xa_719432-1277.jpg?semt=ais_hybrid';
                $profileUrl = url("admin/app-users/{$user->id}");
                
                return '
                    <div style="text-align: start;">
                        <img src="' . $imageUrl . '" alt="User Image" onerror="this.src=\'' . $fallbackImage . '\'" 
                             style="width: 55px; height: 50px; object-fit: cover; border-radius: 5px;" />
                        <div style="margin-top: 10px;">
                            <a href="' . $profileUrl . '" target="_blank" class="icon-eye" style="text-decoration: none; color: #0090b4;">
                                <span class="user-name">' . e($user->name) . '</span>
                            </a>
                        </div>
                    </div>
                ';
            }
            return '<span style="color: #999;">Empty</span>';
        })->unescape();

        $show->field('title', __('Title'));
        $show->field('desc', __('Description'));
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
        $form = new Form(new notify());

        // $form->text('user', __('User'));
          $form->select('uid', 'User')
          ->options(appUsers::all()->pluck('name', 'id'))
          ->rules('required')
          ->default(function ($form) {
              return $form->model()->uid; // Pre-fill with the current value if editing
          });
          
        $form->text('title', __('Title'));
        $form->textarea('desc', __('Description'));

        return $form;
    }
}