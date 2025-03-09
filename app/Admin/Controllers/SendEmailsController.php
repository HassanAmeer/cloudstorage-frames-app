<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\SendEmails;
use \App\Models\appUsers;
use \App\Models\appSettings;

use Illuminate\Support\Facades\Mail;
use App\Mail\Custom;

class SendEmailsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Send Emails';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SendEmails());

        $grid->column('id', __('Id'));
        $grid->column('options', __('Options'))->badge('dark');
        
        $grid->column('email_option_1', 'Send Type')->display(function () {
            // $user = appUsers::where('email', $this->email)->first();
            
         if ($this->options == 1) {
                return <<<HTML
                    From Users
                HTML;
            }
        
            return 'Direct';
        })->color('#0090b4');
        
        $grid->column('email_option_2', 'Email')->display(function () {
            return $this->email;
        })->color('#A0A0A0FF');



        
        $grid->column('subject', __('Subject'));
        $grid->column('body', __('Body'));
        // $grid->column('body', __('Body'))->display(function ($code) {
        //     return <<<HTML
        //      <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
        //     HTML;
        // })->style('min-width:30rem;');
        
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
        $show = new Show(SendEmails::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('to', __('To'));
        $show->field('subject', __('Subject'));
        $show->field('body', __('Body'));
        // $show->field('body', __('Body'))->unescape();
        
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
        $form = new Form(new SendEmails());

        $form->radio('options', 'Email To')
        ->options([
            1 => 'Select User',
            2 => 'Custom Email',
        ])
        ->when(1, function (Form $form) {
            $form->select('email', 'Select User')->options(appUsers::all()->pluck('name', 'email'))->default(null);
        })
        ->when(2, function (Form $form) {
            $form->text('email', 'Enter Email')->default('');
        });
        
    $form->text('subject', __('Subject'));
    $form->html("<br>");
    $form->textarea('body', __('Email Body'));
    // $form->ckeditor('body', __('Email Body'))->options(['lang' => 'en', 'height' => 300, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
    
    $form->saving(function (Form $form) {
        $settings = appSettings::first();
        if ($form->model()->options == 1) {
            // $userIs = appUsers::find((int) $form->uid);
            // $form->email = $userIs->email;
            // $form->model()->email = $userIs->email;
            
        // }else{
            $form->model()->uid = "";
        
        // if(!empty($form->model()->email)){
            $subject = $form->model()->subject;
            $body = $form->model()->body;
            // Mail::to($form->model()->email)->send(new Custom($body, $subject, $settings));
            try {
                Mail::to($form->email)->send(new Custom($body, $subject, $settings));
            } catch (\Exception $e) {
                \Log::error('Email sending failed: ' . $e->getMessage());
            }
        }else{
            $subject = $form->model()->subject;
            // $body = $form->model()->body;
             $body = (string) $form->body;
            try {
                Mail::to($form->email)->send(new Custom($body, $subject, $settings));
            } catch (\Exception $e) {
                \Log::error('Email sending failed: ' . $e->getMessage());
            }
            $form->model()->uid = "";
        }
    });
    
        // $form->text('options', __('Options'))->default('1');
        // $form->email('email', __('Email'))->default('@gmail.com');
        // $form->text('subject', __('Subject'))->default('subject');
        // $form->text('body', __('Body'))->default('body');

        return $form;
    }
}