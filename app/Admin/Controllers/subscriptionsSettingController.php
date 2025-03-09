<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\subscriptionsSetting;

class subscriptionsSettingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Subscriptions Setting';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new subscriptionsSetting());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        // $grid->column('desc', __('Description Points'));
        $grid->column('desc', __('Description Points'))->display(function ($desc) {
            // Check if desc is a valid JSON string or array
            if (is_string($desc)) {
                // If desc is a string, decode it from JSON
                $decoded = json_decode($desc, true);
                // If decoding was successful, display the array values
                if (is_array($decoded)) {
                    // Convert the array to an unordered list with bullet desc
                    $listItems = implode('</li><li>', $decoded);
                    return '<ul><li>' . $listItems . '</li></ul>';
                }
            }
        
            // If desc is already an array, just return it as an unordered list
            if (is_array($desc)) {
                $listItems = implode('</li><li>', $desc);
                return '<ul><li>' . $listItems . '</li></ul>';
            }
        
            // Default case if no valid desc found
            return '<ul><li>' . __('No desc Available') . '</li></ul>';
        })
        ->style('min-width:25rem; white-space: normal; overflow: hidden; list-style-type: disc; color:black;');
        

        $grid->column('price', __('Price (USD)'))->color('#2FA4C1FF');
        $grid->column('storage', __('Storage (GB)'));
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
        $show = new Show(subscriptionsSetting::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        // $show->field('desc', __('Description Points'));


        $show->field('desc', __('Description Points'))->as(function ($desc) {
            if (is_string($desc)) {
                $decoded = json_decode($desc, true);
                if (is_array($decoded)) {
                    // Convert array into an unordered list
                    $output = '<ul>';
                    foreach ($decoded as $point) {
                        $output .= '<li>' . htmlspecialchars($point) . '</li>'; // Escape individual items for safety
                    }
                    $output .= '</ul>';
                    return $output;
                }
            }
        
            if (is_array($desc)) {
                $output = '<ul>';
                foreach ($desc as $point) {
                    $output .= '<li>' . htmlspecialchars($point) . '</li>'; // Escape individual items for safety
                }
                $output .= '</ul>';
                return $output;
            }
        
            return 'No Description Points Available';
        })->unescape(); // This ensures the HTML is rendered as-is.
        

        $show->field('price', __('Price'));
        $show->field('storage', __('Storage (GB)'));
        
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
        $form = new Form(new subscriptionsSetting());

        $form->text('title', __('Title'))->rules('required');
        $form->html("<br>");
        $form->html("<br>");
        $form->list('desc', __('Description Points'))->sortable()->rules('required');
        $form->html("<br>");
        $form->html("<br>");
        $form->text('price', __('Price'))->icon('icon-dollar-sign')->default('100')->rules('required');
        $form->number('storage', __('Storage (GB)'))->default(20)->rules('required');


        $form->editing(function (Form $form) {
            $desc = $form->model()->desc;
    
            if (is_string($desc)) {
                $decoded = json_decode($desc, true);
                if (is_array($decoded)) {
                    $form->model()->desc = $decoded;
                } else {
                    $form->model()->desc = []; 
                }
            }
    
            if (is_array($desc)) {
                $form->model()->desc = $desc;
            }
        });

        return $form;
    }
}