<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\orders;
use \App\Models\appUsers;
use \App\Models\frames;

class ordersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'orders';


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
        $grid = new Grid(new orders());
        $grid->filter(function ($filter) {
            $filter->equal('uid', 'By User')->select(appUsers::all()->pluck('name', 'id'));
        });
        




        $grid->header(function ($query) {
            // Fetch data for pie charts
            $statusCounts = [
                'pending' => $query->where('status', 'pending')->count(),
                'progress' => $query->where('status', 'progress')->count(),
                'completed' => $query->where('status', 'completed')->count(),
            ];
        
            $completedOrders = $statusCounts['completed'];
            $pendingOrders = $statusCounts['pending'];
            $progressOrders = $statusCounts['progress'];
            $totalOrders = $completedOrders + $pendingOrders + $progressOrders;
        
            return <<<HTML
            <div style="display: flex; justify-content: flex-end; align-items: center; height: auto;">
                <!-- <center style="font-size:1rem; margin-right:15px;">
                <b style="color:indigo; opacity:0.2; font-size:2rem;">{$totalOrders}</b>    
                <p style="color:silver;"> Total </p> 
                 </center> -->
                <div style="width: 12%; display: flex; flex-direction: column;">
                    <!-- Completed Orders Line -->
                    <div style="display: flex; align-items: center; gap: 2px; position: relative;">
                        <span style="color: silver; font-size:12px; padding-right:8px; position: relative; cursor: pointer;">
                            Completed: <b>{$completedOrders}</b>
                            <span style="visibility: hidden; opacity: 0; transition: opacity 0.2s, visibility 0.2s; position: absolute; bottom: 120%; left: 50%; transform: translateX(-50%); background-color: #333; color: #fff; padding: 5px; border-radius: 4px; font-size: 10px; white-space: nowrap;">
                                Total completed orders <b style="color:lime;">{$completedOrders}</b>
                            </span>
                        </span>
                        <div style="flex-grow: 1; height: 8px; background-color: rgba(0, 128, 0, 0.2);"></div>
                    </div>
            
                    <!-- Progress Orders Line -->
                    <div style="display: flex; align-items: center; gap: 2px; position: relative;">
                        <span style="color: silver; font-size:12px;padding-right:8px; position: relative; cursor: pointer;">
                            Progress: <b>{$progressOrders}</b>
                            <span style="visibility: hidden; opacity: 0; transition: opacity 0.2s, visibility 0.2s; position: absolute; bottom: 120%; left: 50%; transform: translateX(-50%); background-color: #333; color: #fff; padding: 5px; border-radius: 4px; font-size: 10px; white-space: nowrap;">
                                Total orders in progress <b style="color:cyan;">{$progressOrders}</b>
                            </span>
                        </span>
                        <div style="flex-grow: 1; height: 8px; background-color: rgba(75, 0, 130, 0.2);"></div>
                    </div>
                        <!-- Pending Orders Line -->
                        <div style="display: flex; align-items: center; gap: 2px; position: relative;">
                        <span style="color: silver; font-size:12px; padding-right:8px; position: relative; cursor: pointer;">
                            Pending: <b>{$pendingOrders}</b>
                            <span style="visibility: hidden; opacity: 0; transition: opacity 0.2s, visibility 0.2s; position: absolute; bottom: 120%; left: 50%; transform: translateX(-50%); background-color: #333; color: #fff; padding: 5px; border-radius: 4px; font-size: 10px; white-space: nowrap;">
                                Total pending orders <b style="color:orange;">{$pendingOrders}</b>
                            </span>
                        </span>
                        <div style="flex-grow: 1; height: 8px; background-color: rgba(255, 165, 0, 0.2);"></div>
                    </div>
                </div>
            </div>
            <script>
                // Tooltip hover functionality
                document.querySelectorAll('div[style*="relative"] > span').forEach(function(el) {
                    el.addEventListener('mouseover', function() {
                        const tooltip = el.querySelector('span');
                        tooltip.style.visibility = 'visible';
                        tooltip.style.opacity = '1';
                    });
                    el.addEventListener('mouseout', function() {
                        const tooltip = el.querySelector('span');
                        tooltip.style.visibility = 'hidden';
                        tooltip.style.opacity = '0';
                    });
                });
            </script>
            HTML;
        });
        














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
        
        $grid->column('status', __('Status'))->display(function ($status) {
            $color = match ($status) {
                'pending' => 'orange',
                'progress' => 'blue',
                'completed' => 'green',
                default => 'gray',
            };

            $statusis = match ($status) {
                'pending' => 'icon-history',
                'progress' => 'icon-circle-notch',
                'completed' => 'icon-check',
                default => 'icon-history',
            };
            return "<span class='badge $statusis' style='background: $color; color: white; border-radius: 5px; padding:10px;  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>$status</span>";
        })->style('min-width:12rem; white-space: normal; overflow: hidden;');
        
        // $grid->column('images', __('Images'))->image($this->baseUrl.'/uploads/',75,75);
        $grid->column('images', __('Images'))->display(function ($items) {
            return collect($items)->take(8)->map(function ($item, $index) {
                $opacity = 1 - ($index * 0.15); // Decrease opacity for each subsequent item
                $extension = strtolower(substr(strrchr($item, '.'), 1));
                $isImage = in_array($extension, ['jpg', 'png', 'gif', 'jpeg', 'bmp', 'svg','webp','ico','jfif','pjpeg','pjp','tif','tiff','psd']);
                $isVideo = in_array($extension, ['mp4', 'avi', 'mov', 'wmv']);
                $icon = $isImage ? '<img src="' . $this->baseUrl . '/storage/' . $item . '" alt="Image thumbnail" style="width: 60px; height: 50px; object-fit: cover;border-radius: 5px;">' : ($isVideo ? '<i class="icon-film" style="color: #FF9800;"></i>' : '<i class="icon-file" style="color: #8F8F8F;"></i>');
                return '<a href="' . $this->baseUrl . '/storage/' . $item . '" target="_blank"><span style="display: inline-block; width: 60px; height: 45px; border: 1px solid #EBB8FFFF; box-shadow: 0 0 7px silver; opacity: ' . $opacity . '; text-align: center; line-height: 45px;  overflow: hidden; ">' . $icon . '</span></a>';
            })->implode('&nbsp;');
        })->style('min-width:15rem; white-space: normal; overflow: hidden;background: #FDF8FFFF;');


        // $grid->column('slides', __('Slides'));
        $grid->column('slides', __('Slides'))->display(function ($items) {
            return collect($items)->take(8)->map(function ($item, $index) {
                $opacity = 1 - ($index * 0.15); // Decrease opacity for each subsequent item
                $extension = strtolower(substr(strrchr($item, '.'), 1));
                $isImage = in_array($extension, ['jpg', 'png', 'gif', 'jpeg', 'bmp', 'svg','webp','ico','jfif','pjpeg','pjp','tif','tiff','psd']);
                $isVideo = in_array($extension, ['mp4', 'avi', 'mov', 'wmv']);
                $icon = $isImage ? '<img src="' . $this->baseUrl . '/storage/' . $item . '" alt="Image thumbnail" style="width: 60px; height: 50px; object-fit: cover;border-radius: 5px;">' : ($isVideo ? '<i class="icon-film" style="color: #FF9800;"></i>' : '<i class="icon-file" style="color: #8F8F8F;"></i>');
                return '<a href="' . $this->baseUrl . '/storage/' . $item . '" target="_blank"><span style="display: inline-block; width: 60px; height: 45px; border: 1px solid #EBB8FFFF; box-shadow: 0 0 7px silver; opacity: ' . $opacity . '; text-align: center; line-height: 45px;  overflow: hidden; ">' . $icon . '</span></a>';
            })->implode('&nbsp;');
        })->style('min-width:15rem; white-space: normal; overflow: hidden;background: #FDFFF8FF;');


        // $grid->column('frames', __('Frames'));
        // $grid->column('frames', __('Frames'))->display(function ($items) {
        //     return collect($items)->take(8)->map(function ($item, $index) {
        //         $opacity = 1 - ($index * 0.15); // Decrease opacity for each subsequent item
        //         $extension = strtolower(substr(strrchr($item, '.'), 1));
        //         $isImage = in_array($extension, ['jpg', 'png', 'gif', 'jpeg', 'bmp', 'svg','webp','ico','jfif','pjpeg','pjp','tif','tiff','psd']);
        //         $isVideo = in_array($extension, ['mp4', 'avi', 'mov', 'wmv']);
        //         $icon = $isImage ? '<img src="' . $this->baseUrl . '/storage/' . $item . '" alt="Image thumbnail" style="width: 60px; height: 50px; object-fit: cover;border-radius: 5px;">' : ($isVideo ? '<i class="icon-film" style="color: #FF9800;"></i>' : '<i class="icon-file" style="color: #8F8F8F;"></i>');
        //         return '<a href="' . $this->baseUrl . '/storage/' . $item . '" target="_blank"><span style="display: inline-block; width: 60px; height: 45px; border: 1px solid #EBB8FFFF; box-shadow: 0 0 7px silver; opacity: ' . $opacity . '; text-align: center; line-height: 45px;  overflow: hidden; ">' . $icon . '</span></a>';
        //     })->implode('&nbsp;');
        // })->style('min-width:15rem; white-space: normal; overflow: hidden;background: #FDF8FFFF;');



        // $grid->column('frames', 'Frame')->display(function () {
        //     $frameIs = $this->byframeids;
        //     if ($frameIs) {
        //         $imageUrl = url("storage/{$frameIs->image}");
        //         $fallbackImage = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXV5pJfhUtSld2eLJzZGhbaqlOrmB_RQBWn8MTg8bbpA13u7EpBpHFXMe3zZhDGz8-Wac&usqp=CAU';
        //         $frameUrl = url("admin/frames/{$frameIs->id}");
                
        //         return <<<HTML
        //             <div style="text-align: center;">
        //                 <img src="{$imageUrl}" alt="frameIs Image" onerror="this.src='{$fallbackImage}'" 
        //                      style="width: 55px; height: 50px; object-fit: cover; border-radius: 5px;" />
        //                 <div style="margin-top: 10px;">
        //                     <a href="{$frameUrl}" target="_blank" class="icon-eye" style="text-decoration: none; color: #0090b4;">
        //                         <span class="frameIs-name">{$frameIs->name}</span>
        //                     </a>
        //                 </div>
        //             </div>
        //         HTML;
        //     }
        //     return '<span style="color: #999;">Empty</span>';
        // });
        

        $grid->column('frames', __('Frames'))->display(function () {
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
            return '<span>' . __('Empty') . '</span>';
        })
        ->style('min-width:20rem; white-space: normal; overflow: hidden; list-style-type: disc; color:#FF8000FF;background: #FFFFFFFF;');

        




        // $grid->column('price', __('Price (USD)'));
        // $grid->column('isPay', __('Pay'))->switch();
        // $grid->column('trId', __('Transcation Id'))->color('silver');
        $grid->column('desc', __('Descibed'));
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
        $show = new Show(orders::findOrFail($id));

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
        
        $show->field('status', __('Status'));
        // $show->field('images', __('Images'));
        $show->field('images', __('Images'))->as(function ($items) {
            // Check if images are available
            if (empty($items)) {
                return '<span>' . __('No images available') . '</span>';
            }
        
            return collect($items)->map(function ($item, $index) {
                // Calculate the opacity for each subsequent item
                $opacity = 1 - ($index * 0.10); // Slightly less transparency for better visibility
        
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
        

        // $show->field('slides', __('Slides'));
        $show->field('slides', __('Slides'))->as(function ($items) {
            // Check if images are available
            if (empty($items)) {
                return '<span>' . __('No images available') . '</span>';
            }
        
            return collect($items)->map(function ($item, $index) {
                // Calculate the opacity for each subsequent item
                $opacity = 1 - ($index * 0.10); // Slightly less transparency for better visibility
        
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
        

        // $show->field('frames', __('Frames'));
        // $show->field('frames', __('Frames'))->as(function ($items) {
        //     // Check if images are available
        //     if (empty($items)) {
        //         return '<span>' . __('No images available') . '</span>';
        //     }
        
        //     return collect($items)->map(function ($item, $index) {
        //         // Calculate the opacity for each subsequent item
        //         $opacity = 1 - ($index * 0.10); // Slightly less transparency for better visibility
        
        //         // Extract file extension to check the type
        //         $extension = strtolower(substr(strrchr($item, '.'), 1));
        //         $isImage = in_array($extension, ['jpg', 'png', 'gif', 'jpeg', 'bmp', 'svg', 'webp', 'ico', 'jfif', 'pjpeg', 'pjp', 'tif', 'tiff', 'psd']);
        //         $isVideo = in_array($extension, ['mp4', 'avi', 'mov', 'wmv']);
        
        //         // Prepare the icon or thumbnail based on file type
        //         if ($isImage) {
        //             $icon = '<img src="' . $this->baseUrl . '/storage/' . $item . '" alt="Image thumbnail" style="width: 110px; height: 90px; object-fit: cover; border-radius: 8px; border: 2px solid #FF8408FF; box-shadow: 0 2px 6px rgba(0,0,0,0.2); margin: 5px; padding: 1px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">';
        //         } elseif ($isVideo) {
        //             $icon = '<center><i class="icon-film" style="color: #FF9800; font-size: 30px;"></i></center>';
        //         } else {
        //             $icon = '<center><i class="icon-file" style="color: #8F8F8F; font-size: 30px;"></i></center>';
        //         }
        
        //         // Wrap in a clickable anchor link
        //         return '<a href="' . $this->baseUrl . '/storage/' . $item . '" target="_blank" style="text-decoration: none; display: inline-block; text-align: center; line-height: 10px; margin: 10px; opacity: ' . $opacity . ';">'
        //             . $icon . '<br><span style="font-size: 12px; color: #666; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; max-width: 140px; padding: 5px;">' . htmlspecialchars(substr(basename($item), 0, 20)) . '...</span>'
        //             . '</a>';
        //     })->implode('');
        // })->unescape()->style('min-width:20rem; white-space: normal; overflow: hidden; background: #FFF9F4FF; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);');
        
       

        // $show->field('frames', __('Frame'))->as(function ($frames) {
        //     $frameIs = $this->byframeids;
        //     if ($frameIs) {
        //         $imageUrl = url("storage/{$frameIs->image}");
        //         $fallbackImage = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXV5pJfhUtSld2eLJzZGhbaqlOrmB_RQBWn8MTg8bbpA13u7EpBpHFXMe3zZhDGz8-Wac&usqp=CAU';
        //         $frameUrl = url("admin/frames/{$frameIs->id}");
                
        //         return <<<HTML
        //             <div style="text-align: start;">
        //                 <img src="{$imageUrl}" alt="frameIs Image" onerror="this.src='{$fallbackImage}'" 
        //                      style="width: 55px; height: 50px; object-fit: cover; border-radius: 5px;" />
        //                 <div style="margin-top: 10px;">
        //                     <a href="{$frameUrl}" target="_blank" class="icon-eye" style="text-decoration: none; color: #0090b4;">
        //                         <span class="frameIs-name">{$frameIs->name}</span>
        //                     </a>
        //                 </div>
        //             </div>
        //         HTML;
        //     }
        //     return '<span style="color: #999;">Empty</span>';
        // })->unescape(); 

        $show->field('frames', __('Frames'))->as(function () {
            $frameIs = $this->byframeids(); // Access the relationship
            if ($frameIs->isNotEmpty()) {
                $listItems = $frameIs->map(function ($frameIs) {
                    return '<a href="' . $this->baseUrl . '/admin/frames/' . $frameIs->id . '" style="text-decoration:none;color: #FF8408FF; display: flex; flex-direction: row; align-items: center; justify-content: space-between; width: 100%;padding-bottom:5px;">
                                <span style="margin: 0 10px;">
                                 <img src="' . asset($this->baseUrl . '/storage/' . $frameIs->image) . '" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px; background:#FFEBDFFF;" />
                                    <b style="font-weight: bold; letter-spacing: 1px;">' . htmlspecialchars($frameIs->name) . '</b>
                                </span>
                                <i class="icon-eye"></i>
                            </a>';
                })->implode('</li><li style="list-style-type: decimal;border-bottom:1px solid #EAE2DBFF;;width:100%;padding:5px; padding-bottom:2px;">');
                return '<ul style="background:#FFFCF9FF;"><li style="list-style-type: decimal;border-bottom:1px solid #EAE2DBFF;;width:100%;padding:5px; padding-bottom:2px;">' . $listItems . '</li></ul>';
            }
        
            return '<ul><li>' . __('Empty') . '</li></ul>';
        })->unescape()
          ->style('min-width:15rem; white-space: normal; overflow: hidden; color:#FF8000FF; background: #FFF2E8FF;');
        


        

        
        // $show->field('price', __('Price'));
        // $show->field('isPay', __('Pay'));
        // $show->field('trId', __('Transcation Id'));
        $show->field('desc', __('Desc'));
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
        $form = new Form(new orders());

        // $form->text('uid', __('Uid'))->default('00');
        $form->select('uid', 'Uploaded By User')
        ->options(appUsers::all()->pluck('name', 'id'))
        ->rules('required')
        ->default(function ($form) {
            return $form->model()->uid; // Pre-fill with the current value if editing
        });
    
        $form->select('status', __('Status'))->options([
            'pending' => 'Pending',
            'progress' => 'Progress',
            'completed' => 'Completed',
        ]);
        
        // $form->text('images', __('Images'));
        $form->html("<br>");
        $form->multipleFile('images','Images', function ($items) {
            $form->items = json_encode($items);
        });

        
        // $form->text('slides', __('Slides'));
        $form->html("<br>");
        $form->multipleFile('slides','Slides', function ($items) {
            $form->items = json_encode($items);
        });
        
        // $form->text('frames', __('Frames'));
        // $form->html("<br>");
        // $form->multipleFile('frames','Frames', function ($items) {
        //     $form->items = json_encode($items);
        // });

        // $form->select('frames', 'Frames')
        // ->options(frames::all()->pluck('name', 'id'))
        // ->rules('required')
        // ->default(function ($form) {
        //     return $form->model()->uid; 
        // });

        $form->multipleSelect('frames', 'Frames')->options(frames::pluck('name', 'id'))->help('Select Frames');

        
        $form->html("<br>");
        // $form->text('price', __('Price'));
        // $form->switch('isPay', __('Pay'));
        // $form->text('trId', __('Transcation Id'))->default('abc');
        $form->textarea('desc', __('Described'));

        return $form;
    }

}