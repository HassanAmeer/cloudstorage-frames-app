<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\TransactionHistory;
use \App\Models\appUsers;
use \App\Models\frames;

class TransactionHistoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Transactions History';



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
        $grid = new Grid(new TransactionHistory());

        $grid->column('id', __('Id'));
        // $grid->column('uid', __('Uid'));
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
        })->style('min-width:7rem; white-space: normal; overflow: hidden;');
        
        // $grid->column('status', __('Status'))->switch();
        // $grid->column('payfor', __('Buying Type'));
         $grid->column('payfor', __('Buying Type'))->display(function ($type) {
    // Determine the opacity for each element based on the $type value
    $folderOpacity = $type == 0 ? 1 : 0.2;
    $frameOpacity = $type == 0 ? 0.2 : 1;
    
    // Return styled HTML with dynamic opacity
    return '
        <div style="
            display: flex; 
            align-items: start; 
            border-radius: 8px; 
            max-width: 100px; 
            color: #4CAF50; /* Green text color */
        ">
            <i class="icon-folder" style="font-size: 24px; margin-right: 10px; color: #4CAF50; opacity: ' . $folderOpacity . ';"></i>
            <i class="icon-images" style="font-size: 24px; margin-right: 10px; color: #4CAF50; opacity: ' . $frameOpacity . ';"></i>
        </div>
    ';
});

        
        
        // $grid->column('folderstorage', __('Folder Storage'));
        $grid->column('folderstorage', __('Folder Storage'))->display(function ($usedSpace) {
            // Trim the storage value to handle cases where it's only spaces
            $usedSpace = trim($usedSpace);
        
            if (empty($usedSpace)) {
                // Show empty circle icon if the storage value is empty or only spaces
                return '<i class="icon-times-circle" style="font-size: 15px; color: silver;"></i>';
            }
        
            // Return styled HTML with folder icon and storage value if not empty
            return ' <span style="color:black; opacity:0.4; font-weight: 800;">' . htmlspecialchars($usedSpace) . ' GB</span>';
        });

        
        
        // $grid->column('foldername', __('Folder Name'));
        $grid->column('foldername', __('Folder Name'))->display(function ($name) {
            $name = trim($name);
            if (empty($name)) {
                return '<i class="icon-times-circle" style="font-size: 15px; color: silver;"></i>';
            }
            return htmlspecialchars($name);
        });


        
        // $grid->column('frameid', 'Frame');
        $grid->column('frameid', __('Frame'))->display(function () {
            $frameIs = $this->byframeids();
            if ($frameIs->isNotEmpty()) {
                $listItems = $frameIs->take(2)->map(function ($frameIs) {
                    return '<a href="' . $this->baseUrl . '/admin/frames/' . $frameIs->id . '" style="text-decoration:none;color: #FF8408FF; display: flex; flex-direction: row; align-items: center; justify-content: space-between; width: 100%;padding-bottom:2px;">
                                <span style="margin: 0 10px;">
                                 <img src="' . asset($this->baseUrl . '/storage/' . $frameIs->image) . '" style="width: 30px; height: 30px; margin-right: 10px;" />
                                    <i style="font-weight: bold; letter-spacing: 0px;">' . htmlspecialchars($frameIs->name) . '</i>
                                </span>
                                <i class="icon-eye"></i>
                            </a>';
                })->implode('</li><li style="list-style-type: decimal;border-bottom:1px solid #EAE2DBFF;;width:100%;padding:5px; padding-bottom:2px;">');
                
                $viewMore = $frameIs->count() > 2 ? '<p style="text-align: center; padding-top: 5px;"><a href="' . $this->baseUrl . '/admin/orders/' . $this->id . '" style="color: #FF8408FF;">' . __('View More') . '</a></p>' : '';

                return '<ul><li style="list-style-type: decimal;border-bottom:1px solid #FEF8F3FF;;width:100%;padding:5px; padding-bottom:2px;">' . $listItems . '</li>' . $viewMore . '</ul>';
            }
            return  '<i class="icon-times-circle" style="font-size: 15px; color: silver;"></i>';
        })
        ->style('min-width:20rem; white-space: normal; overflow: hidden; list-style-type: disc; color:#FF8000FF;background: #FFFFFFFF;');

        
        
        $grid->column('price', __('Amount (USD) $'));
        $grid->column('trid', __('Transcation Id'))->color('silver');
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
        $show = new Show(TransactionHistory::findOrFail($id));

        $show->field('id', __('Id'));
        // $show->field('uid', __('Uid'));
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
        
        
        
        // $show->field('status', __('Status'));
        // $show->field('payfor', __('Pay For'));
          $show->field('payfor', __('Buying Type'))->as(function ($payfor) {
            // Determine the opacity for each element based on the $payfor value
            $folderOpacity = $payfor == 0 ? 1 : 0.2;
            $frameOpacity = $payfor == 0 ? 0.2 : 1;
        
            // Return styled HTML with dynamic opacity
            return '
                <div style="
                    display: flex; 
                    align-items: start; 
                    border-radius: 8px; 
                    max-width: 100px; 
                    color: #4CAF50; /* Green text color */
                ">
                    <i class="icon-folder" style="font-size: 24px; margin-right: 10px; color: #4CAF50; opacity: ' . $folderOpacity . ';"></i>
                    <i class="icon-images" style="font-size: 24px; margin-right: 10px; color: #4CAF50; opacity: ' . $frameOpacity . ';"></i>
                </div>
            ';
         })->unescape();

        
        
        $show->field('foldername', __('Folder Name'));
  $show->field('foldername', __('Folder Name'))->as(function ($name) {
    // Trim the name to handle cases where it's only spaces
    $name = trim($name);

    if (empty($name)) {
        // Show empty circle icon if the name is empty or only spaces
        return '<i class="icon-times-circle" style="font-size: 15px; color: silver;"></i>';
    }

    // Return styled HTML with folder icon and name if not empty
    return '
        <div style="
            display: flex; 
            align-items: center; 
            border-radius: 8px; 
            max-width: 140px; 
            color: #4CAF50;
            font-weight: bold;
        ">
            <i class="icon-folder" style="font-size: 15px; color: #4CAF50;"></i>
            <span style="color:green; opacity:0.4; font-weight: 800;">' . htmlspecialchars($name) . '</span>
        </div>
    ';
})->unescape();





        // $show->field('folderstorage', __('Folder Storage'));
        
   $show->field('folderstorage', __('Folder Storage'))->as(function ($usedSpace) {
    // Check if $usedSpace is empty
    if (empty($usedSpace)) {
           return ' <i class="icon-times-circle" style="font-size: 10=5px; color: silver;"></i>';
    }

    // Return styled HTML if $usedSpace is not empty
    return '
        <div style="
            display: flex; 
            align-items: center; 
            background-color: #E7FCECFF; /* Light green background */
            border-radius: 8px; 
            padding: 10px; 
            max-width: 140px; 
            color: #4CAF50; /* Green text color */
            font-weight: bold;
        ">
            <i class="icon-folder" style="font-size: 24px; margin-right: 10px; color: #4CAF50;"></i>
            <span style="color:green; opacity:0.4; font-weight: 800;">' . htmlspecialchars($usedSpace) . ' GB</span>
        </div>
    ';
})->unescape();

        
        
        
        
            $show->field('frameid', __('Frames'))->as(function ($value) {
                // Access the relationship
                $frameIs = $this->byframeids();
            
                // Check if there are related frames
                if ($frameIs->isNotEmpty()) {
                    // Generate the list items for each related frame
                    $listItems = $frameIs->map(function ($frame) {
                        return '
                            <a href="' . $this->baseUrl . '/admin/frames/' . $frame->id . '" 
                               style="text-decoration: none; color: #FF8408FF; display: flex; flex-direction: row; align-items: center; justify-content: space-between; width: 100%; padding-bottom: 5px;">
                                <span style="margin: 0 10px;">
                                    <img src="' . asset($this->baseUrl . '/storage/' . $frame->image) . '" 
                                         style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px; background: #FFEBDFFF;" />
                                    <b style="font-weight: bold; letter-spacing: 1px;">' . htmlspecialchars($frame->name) . '</b>
                                </span>
                                <i class="icon-eye"></i>
                            </a>';
                    })->implode('</li><li style="list-style-type: decimal; border-bottom: 1px solid #EAE2DBFF; width: 100%; padding: 5px; padding-bottom: 2px;">');
            
                    // Return the styled list
                    return '
                        <ul style="background: #FFFCF9FF;">
                            <li style="list-style-type: decimal; border-bottom: 1px solid #EAE2DBFF; width: 100%; padding: 5px; padding-bottom: 2px;">' 
                            . $listItems . 
                            '</li>
                        </ul>';
                }
            
                // Return 'Empty' if no frames exist
                   return ' <i class="icon-times-circle" style="font-size: 10=5px; color: silver;"></i>';
            })->unescape()
              ->style('min-width: 15rem; white-space: normal; overflow: hidden; color: #FF8000FF; background: #FFF2E8FF;');
            
                    


        
        
        
        
        $show->field('price', __('Price'));
        $show->field('trid', __('Transaction Id:'));
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
    $form = new Form(new TransactionHistory());

    // Select user
    $form->select('uid', 'By User')
        ->options(appUsers::all()->pluck('name', 'id'))
        ->rules('required')
        ->default(function ($form) {
            return $form->model()->uid; // Pre-fill with the current value if editing
        });

    $form->html("<br>");

    // Payfor options (Folder Buying or Frame Buying)
    $form->radio('payfor', __('Pay For'))
        ->options([
            0 => 'Folder Buying',
            1 => 'Frame Buying',
        ])
        ->when(0, function (Form $form) {
            // Fields to show when "Folder Buying" is selected
            $form->text('foldername', __('Folder Name'));
            $form->number('folderstorage', __('Folder Storage'))
                ->help('Enter storage in GB');
        })
        ->when(1, function (Form $form) {
            // Fields to show when "Frame Buying" is selected
            $form->multipleSelect('frameid', __('Frame'))
                ->options(frames::pluck('name', 'id'))
                ->help('Select frames for purchase');
        });

    // Common fields
    $form->text('price', __('Price'))
        ->rules('required|numeric|min:1')
        ->help('Enter the price in USD');
    $form->text('trid', __('Transaction ID'))
        ->rules('required|string');

    return $form;
}

}
