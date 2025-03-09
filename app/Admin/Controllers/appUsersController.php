<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\appUsers;
use \App\Models\subscriptionsSetting;

class appUsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App Users';
    
    
    
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
        $grid = new Grid(new appUsers());


        // $grid->header(function ($query) {
        //     return 'header';
        // });


    //     $grid->header(function ($query) {
    //         // Fetch data for the chart
    //         $activeCount = $query->where('isActive', 1)->count();
    //         $inactiveCount = $query->where('isActive', 0)->count();
    //         $totalUsers = $query->count();
    //         $usedStorage = $query->sum('totalStorage');
    //         $remainingStorage = $query->sum('remaingStorage');
    
    //         // Generate a chart using Chart.js or another library
    //         return <<<HTML
    // <div>
    //     <h4>User Statistics</h4>
    //     <canvas id="userChart" width="400" height="200"></canvas>
    //     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    //     <script>
    //         const ctx = document.getElementById('userChart').getContext('2d');
    //         const userChart = new Chart(ctx, {
    //             type: 'pie', // You can use 'line', 'pie', etc.
    //             data: {
    //                 labels: ['Active Users', 'Inactive Users', 'Total Storage', 'Remaining Storage'],
    //                 datasets: [{
    //                     label: 'User Data',
    //                     data: [$activeCount, $inactiveCount, $usedStorage, $remainingStorage],
    //                     backgroundColor: [
    //                         'rgba(75, 192, 192, 0.2)',
    //                         'rgba(255, 99, 132, 0.2)',
    //                         'rgba(153, 102, 255, 0.2)',
    //                         'rgba(255, 206, 86, 0.2)'
    //                     ],
    //                     borderColor: [
    //                         'rgba(75, 192, 192, 1)',
    //                         'rgba(255, 99, 132, 1)',
    //                         'rgba(153, 102, 255, 1)',
    //                         'rgba(255, 206, 86, 1)'
    //                     ],
    //                     borderWidth: 1
    //                 }]
    //             },
    //             options: {
    //                 scales: {
    //                     y: {
    //                         beginAtZero: true
    //                     }
    //                 }
    //             }
    //         });
    //     </script>
    // </div>
    // HTML;
    //     });






    $grid->header(function ($query) {
        // Fetch data for the charts
        $activeCount = $query->where('isActive', 1)->count();
        $inactiveCount = $query->where('isActive', 0)->count();
        $usedStorage = $query->sum('totalStorage');
        $remainingStorage = $query->sum('remaingStorage');

        // Generate two charts in a single row
        return <<<HTML
<div style="display: flex; justify-content: space-between; align-items: center; gap: 20px; padding:1%;">
    <!-- Bar Chart -->
    <div style="width: 25%;">
        <h4>Active <span style="color:silver;">/</span> Inactive Users</h4>
        <canvas id="userBarChart" width="80%" height="60%"></canvas>
    </div>

    <!-- Pie Chart -->
    <!-- <div style="width: 30%;">
        <h4>Storage Usage</h4>
        <canvas id="storagePieChart" width="80%" height="60%"></canvas>
    </div> -->
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Bar Chart for Active vs Inactive Users
    const userBarCtx = document.getElementById('userBarChart').getContext('2d');
    const userBarChart = new Chart(userBarCtx, {
        type: 'bar',
        data: {
            labels: ['Active Users', 'Inactive Users'],
            datasets: [{
                label: 'Users',
                data: [$activeCount, $inactiveCount],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Pie Chart for Storage Usage
    // const storagePieCtx = document.getElementById('storagePieChart').getContext('2d');
    // const storagePieChart = new Chart(storagePieCtx, {
    //     type: 'pie',
    //     data: {
    //         labels: ['Used Storage', 'Remaining Storage'],
    //         datasets: [{
    //             data: [$usedStorage, $remainingStorage],
    //             backgroundColor: [
    //                 'rgba(54, 162, 235, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)'
    //             ],
    //             borderColor: [
    //                 'rgba(54, 162, 235, 1)',
    //                 'rgba(255, 206, 86, 1)'
    //             ],
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         responsive: true
    //     }
    // });
</script>
HTML;
    });
        

        $grid->column('id', __('Id'));
        $grid->column('isActive', __('Is Active'))->switch();
        $grid->column('img', __('Avatar'))->image($this->baseUrl.'/storage/',75,75);
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        // $grid->column('subscription', __('Subscription'));
        // $grid->column('subscription', __('Subscription'))->display(function ($plan) {
        //     $data = $this->getplans;
        //     if($data){
        //         return '<i class="icon-folder-plus" style="color: silver;">' . $data->title . '</i>';
        //     }
        //     return '<i class="icon-folder-open" style="color: silver;"> Empty </i>';
        // })->style('color: green;');

        // $grid->column('totalStorage', __('Total Storage'))->display(function ($storage) {
        //     return '<i class="icon-folder" style="color: silver;"> ' . $storage . ' GB</i>';
        // })->style('color: orange;');
        
        // $grid->column('remaingStorage', __('Remaing Storage'))->display(function ($storage) {
        //     return '<i class="icon-folder-open" style="color: silver;"> ' . $storage . ' GB</i>';
        // })->style('color: black;');
        
        $grid->column('address', __('Address (Postal Code)'));
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
        $show = new Show(appUsers::findOrFail($id));

        // $show->field('id', __('User Id'));
        $show->field('id', __('User ID'))->as(function ($id) {
            return '<span class="label label-light" style="color:silver;"><i class="icon-id-card" style="color:silver;"></i> # '.$id.' </span>'; 
        })->unescape(); 

        $show->field('isActive', __('Is Active'))->as(function ($isActive) {
            return $isActive 
                ? '<span class="label label-success" style="color:green;"><i class="icon-check" style="color:green;"></i> Yes</span>' 
                : '<span class="label label-danger" style="color:red;"><i class="icon-window-close" style="color:red;"></i> No</span>';
        })->unescape(); 
        
        $show->field('img', __('User Profile'))->image($this->baseUrl.'/uploads/',75,75);
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        // $show->field('subscription', __('Subscription'));
        // $show->field('subscription', __('Subscription'))->as(function () {
        //     $data = $this->getplans;
        //     if ($data) {
        //         return '<i class="icon-folder-plus" style="color: silver;">' . e($data->title) . '</i>';
        //     }
        //     return '<i class="icon-folder-open" style="color: silver;"> Empty </i>';
        // })->unescape();

        // // $show->field('totalStorage', __('Total Storage'));
        // $show->field('totalStorage', __('Total Storage'))->as(function ($totalStorage) {
        //     return '<span class="label label-success" style="color:green;"><i class="icon-folder" style="color:green;"></i> '.$totalStorage.' GB </span>'; 
        // })->unescape(); 
        
        // // $show->field('remaingStorage', __('Remaing Storage'));
        // $show->field('remaingStorage', __('Remaing Storage'))->as(function ($remaingStorage) {
        //     return '<span class="label label-warning" style="color:orange;"><i class="icon-folder-minus" style="color:orange;"></i> '.$remaingStorage.' GB </span>'; 
        // })->unescape(); 
        
        $show->field('address', __('Address (Postal Code)'));
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
        $form = new Form(new appUsers());

        $form->switch('isActive', __('IsActive'));
        $form->image('img', __('Img'));
        $form->text('name', __('Name'))->rules('required');
        $form->email('email', __('Email'))->rules('required');
        $form->phonenumber('phone', __('Phone'));
        $form->password('password', __('Password'))->creationRules('required')->updateRules('nullable');
        // $form->text('subscription', __(''));
        
        // $form->select('subscription', 'Subscription')
        // ->options(subscriptionsSetting::all()->pluck('title', 'id'))
        // ->rules('required')
        // ->default(function ($form) {
        //     return $form->model()->uid; 
        // });
    
        // $form->text('totalStorage', __('Total Storage'))->default('20');
        $form->textarea('address', __('Address (Postal Code)'))->default('USA');
        // $form->text('remaingStorage', __('Remaing Storage'))->default('10');

        return $form;
    }
}