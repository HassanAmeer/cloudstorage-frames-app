<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\cloudstorage;
use \App\Models\appUsers;
use \App\Models\subscriptionsSetting;

class cloudstorageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cloud Storage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new cloudstorage());


        $grid->filter(function ($filter) {
            $filter->equal('uid', 'By User')->select(appUsers::all()->pluck('name', 'id'));
        });

        $grid->column('id', __('Id'));
        // $grid->column('uid', __('By User'));
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
        

        $grid->column('folderId', __('Folder Id For Share'))->display(function ($id) {
            return '<i class="icon-share-alt" style="color: silver;"> #' . $id . '</i>';
        })->style('color: silver;')->copyable();
        // $grid->column('folderName', __('Folder Name'));
        $grid->column('folderName', __('Folder Name'))->display(function () {
        $subscriptionIs = subscriptionsSetting::find($this->subscription);
            //----------------------------------------------------
            // Assuming `usedsize` is a field with the used space data (e.g., "5mb")
            $usedSpace = $this->usedsize ?? '0'; // Default to '0GB' if data is not available
        
            return '
                <div style="display: flex; align-items: center; gap: 10px;">
                    <span style="display: inline-block; width: 40px; height: 40px; background: #DFF6DFFF; border-radius: 8px; text-align: center; line-height: 40px;">
                        <i class="icon-folder" style="color: #28A745; font-size: 20px;"></i>
                    </span>
                    <div style="display: flex; flex-direction: column;">
                        <strong style="color: #28A745; font-size: 14px;">' . e($this->folderName) . '</strong>
                        <small style="color: #6C757D; font-size: 12px;">' . e($usedSpace) .' MB / '.$subscriptionIs->title.' </small>
                    </div>
                </div>';
        })->style('min-width:15rem; white-space: normal; overflow: hidden;');

      $grid->column('subscription', __('Subscription'))->display(function ($plan) {
            $data = $this->getplans;
            if($data){
                return '<i class="icon-folder-plus" style="color: silver;">' . $data->title . '</i>';
            }
            return '<i class="icon-folder-open" style="color: silver;"> Empty </i>';
        })->style('color: silver;');





        
        // $grid->column('usedsize', __('Folder Used Space'));
        // $grid->column('items', __('Items'));
        $grid->column('items', __('Attachments'))->display(function ($items) {
            return collect($items)->take(8)->map(function ($item, $index) {
                $opacity = 1 - ($index * 0.11); // Decrease opacity for each subsequent item
                $extension = strtolower(substr(strrchr($item, '.'), 1));
                $isImage = in_array($extension, ['jpg', 'png', 'gif', 'jpeg', 'bmp', 'svg','webp','ico','jfif','pjpeg','pjp','tif','tiff','psd']);
                $isVideo = in_array($extension, ['mp4', 'avi', 'mov', 'wmv']);
                $icon = $isImage ? '<img src="' . $this->baseUrl . '/storage/' . $item . '" alt="Image thumbnail" style="width: 60px; height: 50px; object-fit: cover;border-radius: 5px;">' : ($isVideo ? '<i class="icon-film" style="color: #FF9800;"></i>' : '<i class="icon-file" style="color: #8F8F8F;"></i>');
                return '<a href="' . $this->baseUrl . '/storage/' . $item . '" target="_blank"><span style="display: inline-block; width: 60px; height: 45px; border: 1px solid #EBB8FFFF; box-shadow: 0 0 7px silver; opacity: ' . $opacity . '; text-align: center; line-height: 45px;  overflow: hidden; ">' . $icon . '</span></a>';
            })->implode('&nbsp;');
        })->style('min-width:20rem; white-space: normal; overflow: hidden;background: #FDF8FFFF;');

        // $grid->column('shared', __('Shared To Users'));
        $grid->column('shared', __('Shared With Users'))->display(function () {
            $users = $this->appusers();
            if ($users->isNotEmpty()) {
                $listItems = $users->take(2)->map(function ($user) {
                    return '<a href="' . $this->baseUrl . '/admin/app-users/' . $user->id . '" style="text-decoration:none;color: #FF8408FF; display: flex; flex-direction: row; align-items: center; justify-content: space-between; width: 100%;padding-bottom:2px;">
                                <span style="margin: 0 10px;">
                                 <img src="' . asset($this->baseUrl . '/storage/' . $user->img) . '" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px; background:#FFEBDFFF;" />
                                    <i style="font-weight: bold; letter-spacing: 0px;">' . htmlspecialchars($user->name) . '</i>
                                </span>
                                <i class="icon-eye"></i>
                            </a>';
                })->implode('</li><li style="list-style-type: decimal;border-bottom:1px solid #EAE2DBFF;;width:100%;padding:5px; padding-bottom:2px;">');
                
                $viewMore = $users->count() > 2 ? '<p style="text-align: center; padding-top: 5px;"><a href="' . $this->baseUrl . '/admin/cloudstorages/' . $this->id . '" style="color: #FF8408FF;">' . __('View More') . '</a></p>' : '';

                return '<ul><li style="list-style-type: decimal;border-bottom:1px solid #EAE2DBFF;;width:100%;padding:5px; padding-bottom:2px;">' . $listItems . '</li>' . $viewMore . '</ul>';
            }
            return '<span>' . __('Empty') . '</span>';
        })
        ->style('min-width:20rem; white-space: normal; overflow: hidden; list-style-type: disc; color:#FF8000FF;background: #FFF9F4FF;');

        
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
        $show = new Show(cloudstorage::findOrFail($id));

        $show->field('id', __('Id'));
        // $show->field('uid', __('By User'));
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
        $show->field('folderId', __('Folder Id'));
        $show->field('folderName', __('Folder Name'));

        $show->field('_', '')->as(function () {
            return '<br>';
        })->unescape();
        
        // $show->field('usedsize', __('Storage Used'));
        $show->field('usedsize', __('Storage Used'))->as(function ($usedSpace) {
            $subscriptionIs = subscriptionsSetting::find($this->subscription);
            // -------------------------------------------------------
            // Handle null or unexpected values gracefully
            $usedSpaceText = $usedSpace ? e($usedSpace) : __('0');
        
            // Return styled HTML
            return '
                <div style="
                    display: flex; 
                    align-items: center; 
                    background-color: #E7FCECFF; /* Light green background */
                    border-radius: 8px; 
                    padding: 10px; 
                    max-width: 300px; 
                    color: #4CAF50; /* Green text color */
                    font-weight: bold;
                ">
                    <i class="icon-folder" style="font-size: 24px; margin-right: 10px; color: #4CAF50;"></i>
                    <span style="font-weight: 800;">' . $usedSpaceText . ' MB <span style="color: #4CAF50; font-weight: 500;"></span> <span style="color:silver;">/</span>
                    <span style="color:orange; opacity:0.4; font-weight: 800;">'.$subscriptionIs->title . '</span>
                    </span>
                </div>
            ';
        })->unescape();
        
        
        
        // $show->field('items', __('Items'));
        $show->field('items', __('Items'))->as(function ($items) {
            // Check if images are available
            if (empty($items)) {
                return '<span>' . __('No images available') . '</span>';
            }
        
            return collect($items)->map(function ($item, $index) {
                // Calculate the opacity for each subsequent item
                $opacity = 1 - ($index * 0.002); // Slightly less transparency for better visibility
        
                // Extract file extension to check the type
                $extension = strtolower(substr(strrchr($item, '.'), 1));
                $isImage = in_array($extension, ['jpg', 'png', 'gif', 'jpeg', 'bmp', 'svg', 'webp', 'ico', 'jfif', 'pjpeg', 'pjp', 'tif', 'tiff', 'psd']);
                $isVideo = in_array($extension, ['mp4', 'avi', 'mov', 'wmv']);
        
                // Prepare the icon or thumbnail based on file type
                if ($isImage) {
                    $icon = '<img src="' . $this->baseUrl . '/storage/' . $item . '" alt="Image thumbnail" style="width: 110px; height: 90px; object-fit: cover; border-radius: 8px; border: 2px solid #FF8408FF; box-shadow: 0 2px 6px rgba(0,0,0,0.2); margin: 5px; padding: 1px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">';
                } elseif ($isVideo) {
                    $icon = '<center><i class="icon-film" style="color: #FF9800; font-size: 30px;"></i></center>';
                } else {
                    $icon = '<center><i class="icon-file" style="color: #8F8F8F; font-size: 30px;"></i></center>';
                }
        
                // Wrap in a clickable anchor link
                return '<a href="' . $this->baseUrl . '/storage/' . $item . '" target="_blank" style="text-decoration: none; display: inline-block; text-align: center; line-height: 10px; margin: 10px; opacity: ' . $opacity . ';">'
                    . $icon . '<br><span style="font-size: 12px; color: #666; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; max-width: 140px; padding: 5px;">' . htmlspecialchars(substr(basename($item), 0, 20)) . '...</span>'
                    . '</a>';
            })->implode('');
        })->unescape()->style('min-width:20rem; white-space: normal; overflow: hidden; background: #FFF9F4FF; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);');
        
        $show->field('_', '')->as(function () {
            return '<br><style>.user-name{line-height: 30px;}</style>';
        })->unescape();
        // $show->field('shared', __('Shared'));
        $show->field('shared', __('Shared With Others (Storage)'))->as(function () {
            $users = $this->appusers(); // Access the relationship
            if ($users->isNotEmpty()) {
                $listItems = $users->map(function ($user) {
                    return '<a href="' . $this->baseUrl . '/admin/app-users/' . $user->id . '" style="text-decoration:none;color: #FF8408FF; display: flex; flex-direction: row; align-items: center; justify-content: space-between; width: 100%;padding-bottom:5px;">
                                <span style="margin: 0 10px;">
                                 <img src="' . asset($this->baseUrl . '/storage/' . $user->img) . '" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px; background:#FFEBDFFF;" />
                                    <b style="font-weight: bold; letter-spacing: 1px;">' . htmlspecialchars($user->name) . '</b>
                                </span>
                                <i class="icon-eye"></i>
                            </a>';
                })->implode('</li><li style="list-style-type: decimal;border-bottom:1px solid #EAE2DBFF;;width:100%;padding:5px; padding-bottom:2px;">');
                return '<ul style="background:#FFFCF9FF;"><li style="list-style-type: decimal;border-bottom:1px solid #EAE2DBFF;;width:100%;padding:5px; padding-bottom:2px;">' . $listItems . '</li></ul>';
            }
        
            return '<ul><li>' . __('Empty') . '</li></ul>';
        })->unescape()
          ->style('min-width:15rem; white-space: normal; overflow: hidden; color:#FF8000FF; background: #FFF2E8FF;');
        

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
        $form = new Form(new cloudstorage());

        // $form->text('uid','By User');
        $form->select('uid', 'Uploaded By User')
        ->options(appUsers::all()->pluck('name', 'id'))
        ->rules('required')
        ->default(function ($form) {
            return $form->model()->uid; // Pre-fill with the current value if editing
        });

        // $form->select('subscription', 'Subscription')
        // ->options(subscriptionsSetting::all()->pluck('title', 'id'))
        // ->rules('required')
        // ->default(function ($form) {
        //     $form->model()->totalsize;
        //     return $form->model()->uid; 
        //  // return [$user->id => $user->name]; // example
        // });
    
        
    $form->select('subscription', 'Subscription')
    ->options(subscriptionsSetting::all()->pluck('title', 'id'))
    ->rules('required')
    ->default(function ($form) {
        // Set the default value based on the current model's subscription ID
        return $form->model()->subscription_id; // Use the correct field that holds the subscription ID
    });
    
    
    
        
        // $form->text('folderId', __('Folder Id'))->default('abc');
        $form->text('folderName', __('Folder Name'));
        // $form->text('usedsize', __('Folder Used Space'))->default(0);

        // $form->text('items', __('Items')); ->pathColumn('path')
        $form->html("<br>");

        $form->multipleFile('items','Attachments', function ($items) {
            $form->items = json_encode($items);
        });
        // ->sortColumn('order')->removable()->help("Multiple Files");
        
        $form->html("<br>");
        
        // $form->text('shared', __('Shared'));
        $form->multipleSelect('shared', 'Shared')->options(appUsers::where('id', '!=', $form->id)->get()->pluck('name', 'id'))->help('Select Users To Share');

 


        

        $form->saving(function (Form $form) {
            $subscriptionIs = subscriptionsSetting::find( (int) $form->input('subscription'));
            $form->model()->totalsize = $subscriptionIs->storage ? (int) ($subscriptionIs->storage * 1024) : 0;
            
            if (!$form->isEditing()) {
                $form->model()->folderId = (new \Illuminate\Support\Str())->random(4) . (new \Illuminate\Support\Str())->random(4, '0123456789');
            }
        });

        return $form;
    }
}