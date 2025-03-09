<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="{{asset($resp['baseUrl'].'/uploads/'.$resp['settings']['websiteLogo'])}}"
        type="image/x-icon" sizes="32x32">
    <title>{{$resp['settings']['websiteName']}}</title>
    <style>
    /* @media screen and (max-width: 600px) {
        body {
            padding: 2rem;
        }
    }

    @media screen and (min-width: 600px) {
        body {
            padding: 5rem;
        }
    } */
    </style>
</head>

<!-- <pre>{ json_encode($resp, JSON_PRETTY_PRINT) }</pre> -->

<body>

    <center>
        <table
            style="width: 100%; font-weight:300; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:grey; border-collapse: separate; ">
            <tr
                style="border-collapse: separate !important; justify-content:space-between; justify-content:right; align-items:right;">
                <td style="text-align: left; padding-right: 10px;color:silver;">
                    {{ \Carbon\Carbon::now()->format('m/d/Y g:i A') }}</td>
                <td style="text-align: right; padding-left: 10px;">
                    ID #: {{isset($resp['vehicleHistory']['vId']) ? $resp['vehicleHistory']['vId'] : ''}}
                    @if($resp['vehicleHistory']['isShowImg'] == 1)
                    <img src="{{ file_exists(public_path('uploads/'.$resp['vehicleHistory']['vImg'])) 
            ? 'data:image/jpeg;base64,' . base64_encode(file_get_contents(public_path('uploads/'.$resp['vehicleHistory']['vImg']))) 
            : 'https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg' }}"
                        style="width:4rem; padding-left:1rem;"
                        onerror="this.onerror=null;this.src='https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg';"
                        alt="Logo">
                    @endif
                </td>
            </tr>
        </table>
    </center>
    <br>
    <div class="border p-3" style="border: 1px solid #dee2e6; padding: 10px;">
        <table class="" style="width: 100%; border-collapse: separate; border-spacing: 10px; background:whitesmoke;">

            <tr>
                <td>
                    <img src="{{ file_exists(public_path('uploads/'.$resp['settings']['websiteLogo'])) 
            ? 'data:image/jpeg;base64,' . base64_encode(file_get_contents(public_path('uploads/'.$resp['settings']['websiteLogo']))) 
            : 'https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg' }}"
                        style="width:4rem;"
                        onerror="this.onerror=null;this.src='https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg';"
                        alt="Logo">
                </td>
                <td>{{isset($resp['vehicleHistory']['title']) ? $resp['vehicleHistory']['title'] : ''}}</td>
                <td>{{isset($resp['vehicleHistory']['price']) ? $resp['vehicleHistory']['price'] : ''}} $</td>
            </tr>
        </table>
        <br>
        <table class="carfax-table">
            <tr>
                <th class="carfax-header" style="font-weight:100; color:silver;">Type</th>
                <td style="text-transform: uppercase;">
                    {{isset($resp['vehicleHistory']['type']) ? $resp['vehicleHistory']['type'] : ''}}</td>
            </tr>
            <tr>
                <th class="carfax-header" style="font-weight:100; color:silver;">Make</th>
                <td>{{isset($resp['vehicleHistory']['make']) ? $resp['vehicleHistory']['make'] : ''}}</td>
            </tr>
            <tr>
                <th class="carfax-header" style="font-weight:100; color:silver;">Vehicle Type</th>
                <td>{{isset($resp['vehicleHistory']['vtype']) ? $resp['vehicleHistory']['vtype'] : ''}}</td>
            </tr>
            <tr>
                <th class="carfax-header" style="font-weight:100; color:silver;">Model Year</th>
                <td>{{isset($resp['vehicleHistory']['modelYear']) ? $resp['vehicleHistory']['modelYear'] : ''}}</td>
            </tr>
            <tr>
                <th class="carfax-header" style="font-weight:100; color:silver;">Body Style</th>
                <td>{{isset($resp['vehicleHistory']['bodyStyle']) ? $resp['vehicleHistory']['bodyStyle'] : ''}}</td>
            </tr>

        </table>
        <h4>{{isset($resp['vehicleHistory']['title']) ? $resp['vehicleHistory']['title'] : ''}}</h4>
        <p style="font-weight:300; color:silver;">
            {{isset($resp['vehicleHistory']['desc']) ? $resp['vehicleHistory']['desc'] : ''}}
        </p>
        @foreach(isset($resp['vehicleHistory']['points']) ? $resp['vehicleHistory']['points'] : [] as $point)
        <div style="width:100%; border-top: 1px solid silver; padding-top: 2px"></div>
        <p class="text-capitalize text-secondary"><i class="fa fa-circle text-muted pr-2 fa-xs"
                style="opacity: 0.5;"></i> {{ $point }}
        </p>
        @endforeach

    </div>

    <style>
    .carfax-table {
        width: 100%;
        border-collapse: collapse;
    }

    .carfax-table th,
    .carfax-table td {
        border: 1px solid #dee2e6;
        padding: 8px;
        text-align: center;
    }

    .carfax-header {
        background-color: #f8f9fa;
        font-weight: bold;
        text-align: left;
        padding: 10px;
    }

    .warranty-expired {
        color: red;
        font-weight: bold;
    }

    .checkmark {
        color: green;
    }
    </style>
    <br>
    <p class="" style="font-weight:300; color:silver;">
        {{isset($resp['reportSetting']['vehicleHistoryReportDesc']) ? $resp['reportSetting']['vehicleHistoryReportDesc'] : ''}}
    </p><br />
    <div style="position: relative; width: 100%; padding-bottom: 20px;padding-top: 20px;">
        <div style="width:100%; border-top: 1px solid silver; padding-top: 15px"></div>
        <h4
            style="position: absolute; top: 0em; left: 50%; transform: translateX(-50%); align-items: center; background-color: white; margin: auto; padding: 10px; color: black;">
            Additional History
        </h4>
    </div>
    <div class=" bg-light">
        <div class="carfax-header">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 4rem;">
                        <img src="{{ file_exists(public_path('uploads/'.$resp['settings']['websiteLogo'])) 
                    ? 'data:image/jpeg;base64,' . base64_encode(file_get_contents(public_path('uploads/'.$resp['settings']['websiteLogo']))) 
                    : 'https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg' }}"
                            style="width:4rem;"
                            onerror="this.onerror=null;this.src='https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg';"
                            alt="Logo">
                    </td>
                    <td>
                        <p class="text-muted mb-0" style="padding-left:2rem;"> issues are reported to
                            {{isset($resp['settings']['websiteName']) ? $resp['settings']['websiteName'] : ''}} </p>
                    </td>
                </tr>
            </table>
        </div>
        <table class="table table-bordered carfax-table">
            <thead>
                <tr>
                    <th colspan="2" style="width: 33%;">Category</th>

                    @php
                    $owners = optional($resp['additionalHistory'])['totalLossOwners'] ?? [];
                    $totalOwners = count($owners);
                    $extraOwnersCount = max(0, $totalOwners - 3); // Calculate the extra owners
                    $lastThreeOwners = array_slice($owners, -2); // Get the last 3 owners
                    @endphp

                    @if($extraOwnersCount > 0)
                    <th>Owners 1-{{$extraOwnersCount+1}}</th> <!-- Group extra owners -->
                    @endif

                    @foreach($lastThreeOwners as $index => $point)
                    <th>Owner {{$extraOwnersCount + $index + 1}}</th>
                    @endforeach



                    <!-- <th>Owners 1-5</th>
                    <th>Owner 6</th>
                    <th>Owner 7</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td colspan="2" style="width: 33%;">Total Loss</td>
                    @foreach(array_slice(optional($resp['additionalHistory'])['totalLossOwners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach





                </tr>
                <tr>
                    <td colspan="2" style="width: 33%;">Structural Damage</td>
                    @foreach(array_slice(optional($resp['additionalHistory'])['totalLossOwners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                <tr>
                    <td colspan="2" style="width: 33%;">Airbag Deployment</td>
                    @foreach(array_slice($resp['additionalHistory']['airBagDeploymentOwners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach

                </tr>
                <tr>
                    <td colspan="2" style="width: 33%;">Odometer Check</td>
                    @foreach(array_slice($resp['additionalHistory']['odoMeterCheckOwners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                <tr>
                    <td colspan="2" style="width: 33%;">Accident / Damage</td>
                    @foreach(array_slice($resp['additionalHistory']['accidentDamageOwners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                <tr>
                    <td colspan="2" style="width: 33%;">Manufacturer Recall</td>
                    @foreach(array_slice($resp['additionalHistory']['manufacturerRecallOwners'] ?? [], -3) as $point)
                    <td> {{$point}} </td>
                    @endforeach
                </tr>
                <tr>
                    <td colspan="2" style="width: 33%;">Basic Warranty</td>
                    @foreach(array_slice($resp['additionalHistory']['basicWarrantyOwners'] ?? [], -3) as $point)
                    <td><span class="warranty-expired">{{$point}}</span></td>
                    @endforeach
                </tr>
            </tbody>
        </table>

        <!-- <p style="color: grey; font-weight: 300; padding: 10px;">
            {isset($resp['reportSetting']['warrantyDesc']) ? $resp['reportSetting']['warrantyDesc'] : ''}</p> -->
    </div>
    <br>


    @if(isset($resp['titleHistory']['title1']) && $resp['titleHistory']['title1'] != "" &&
    $resp['titleHistory']['title1'] != "empty")
    <div style="position: relative; width: 100%; padding-bottom: 20px;padding-top: 20px;">
        <div style="width:100%; border-top: 1px solid silver; padding-top: 15px"></div>
        <h4
            style="position: absolute; top: 0em; left: 50%; transform: translateX(-50%); align-items: center; background-color: white; margin: auto; padding: 10px; color: black;">
            Title History
        </h4>
    </div>

    <div class=" bg-light">
        <div class="carfax-header">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 4rem;">
                        <img src="{{ file_exists(public_path('uploads/'.$resp['settings']['websiteLogo'])) 
                    ? 'data:image/jpeg;base64,' . base64_encode(file_get_contents(public_path('uploads/'.$resp['settings']['websiteLogo']))) 
                    : 'https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg' }}"
                            style="width:4rem;"
                            onerror="this.onerror=null;this.src='https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg';"
                            alt="Logo">
                    </td>
                    <td>
                        <p class="text-muted mb-0" style="padding-left:2rem;"> Gurantees in this section </p>
                    </td>
                </tr>
            </table>
        </div>
        <table class="table table-bordered carfax-table">
            <thead>
                <tr>
                    <th colspan="2" style="width: 33%;">Category</th>
                    @php
                    $owners = optional($resp['titleHistory'])['ownerslist1'] ?? [];
                    $totalOwners = count($owners);
                    $extraOwnersCount = max(0, $totalOwners - 3); // Calculate the extra owners
                    $lastThreeOwners = array_slice($owners, -2); // Get the last 3 owners
                    @endphp

                    @if($extraOwnersCount > 0)
                    <th>Owners 1-{{$extraOwnersCount+1}}</th> <!-- Group extra owners -->
                    @endif

                    @foreach($lastThreeOwners as $index => $point)
                    <th>Owner {{$extraOwnersCount + $index + 1}}</th>
                    @endforeach
                    <!-- <th>Owners 1-5</th>
                    <th>Owner 6</th>
                    <th>Owner 7</th> -->
                </tr>
            </thead>
            <tbody>
                @if(isset($resp['titleHistory']['title1']) && $resp['titleHistory']['title1'] != "" &&
                $resp['titleHistory']['title1'] != "empty")
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['titleHistory']['title1']) ? $resp['titleHistory']['title1'] : ''}}<p
                            style="color:silver;">
                            {{isset($resp['titleHistory']['desc1']) ? $resp['titleHistory']['desc1'] : ''}} </p>
                    </td>
                    @foreach(array_slice($resp['titleHistory']['ownerslist1'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif

                @if(isset($resp['titleHistory']['title2']) && $resp['titleHistory']['title2'] != "" &&
                $resp['titleHistory']['title2'] != "empty")
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['titleHistory']['title2']) ? $resp['titleHistory']['title2'] : ''}}<p
                            style="color:silver;">
                            {{isset($resp['titleHistory']['desc2']) ? $resp['titleHistory']['desc2'] : ''}} </p>
                    </td>
                    @foreach(array_slice($resp['titleHistory']['ownerslist2'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif

                @if(isset($resp['titleHistory']['title3']) && $resp['titleHistory']['title3'] != "" &&
                $resp['titleHistory']['title3'] != "empty")
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['titleHistory']['title3']) ? $resp['titleHistory']['title3'] : ''}}<p
                            style="color:silver;">
                            {{isset($resp['titleHistory']['desc3']) ? $resp['titleHistory']['desc3'] : ''}} </p>
                    </td>
                    @foreach(array_slice($resp['titleHistory']['ownerslist3'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif



            </tbody>
        </table>

        <p style="color: grey; font-weight: 300; padding: 10px;">
            {{isset($resp['reportSetting']['titleHistoryDesc']) ? $resp['reportSetting']['titleHistoryDesc'] : ''}} </p>
    </div>
    @endif
    <br>



    <div style="position: relative; width: 100%; padding-bottom: 20px;padding-top: 20px;">
        <div style="width:100%; border-top: 1px solid silver; padding-top: 15px"></div>
        <h4
            style="position: absolute; top: 0em; left: 50%; transform: translateX(-50%); align-items: center; background-color: white; margin: auto; padding: 10px; color: black;">
            Ownership History
        </h4>
    </div>

    <div class=" bg-light">
        <div class="carfax-header">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 4rem;">
                        <img src="{{ file_exists(public_path('uploads/'.$resp['settings']['websiteLogo'])) 
                    ? 'data:image/jpeg;base64,' . base64_encode(file_get_contents(public_path('uploads/'.$resp['settings']['websiteLogo']))) 
                    : 'https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg' }}"
                            style="width:4rem;"
                            onerror="this.onerror=null;this.src='https://static.vecteezy.com/system/resources/previews/027/538/857/non_2x/electric-vehicle-car-icon-outline-car-outline-drawing-vector.jpg';"
                            alt="Logo">
                    </td>
                    <td>
                        <p class="text-muted mb-0" style="padding-left:2rem;"> Gurantees in this section </p>
                    </td>
                </tr>
            </table>
        </div>
        <table class="table table-bordered carfax-table">
            <thead>
                <tr>
                    <th colspan="2" style="width: 33%;">Category</th>
                    @php
                    $owners = optional($resp['ownershipHistory'])['yearpurchasedowners'] ?? [];
                    $totalOwners = count($owners);
                    $extraOwnersCount = max(0, $totalOwners - 3); // Calculate the extra owners
                    $lastThreeOwners = array_slice($owners, -2); // Get the last 3 owners
                    @endphp

                    @if($extraOwnersCount > 0)
                    <th>Owners 1-{{$extraOwnersCount+1}}</th> <!-- Group extra owners -->
                    @endif

                    @foreach($lastThreeOwners as $index => $point)
                    <th>Owner {{$extraOwnersCount + $index + 1}}</th>
                    @endforeach
                    <!-- <th>Owners 1-5</th>
                    <th>Owner 6</th>
                    <th>Owner 7</th> -->
                </tr>
            </thead>
            <tbody>
                @if(isset($resp['ownershipHistory']['yearpurchasedowners']) &&
                count($resp['ownershipHistory']['yearpurchasedowners']) > 0)
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['ownershipHistory']['yearpurchased']) ? $resp['ownershipHistory']['yearpurchased'] : 'Purchased Year'}}
                    </td>
                    @foreach(array_slice($resp['ownershipHistory']['yearpurchasedowners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif

                @if(isset($resp['ownershipHistory']['typeofowners']) &&
                count($resp['ownershipHistory']['typeofowners']) > 0)
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['ownershipHistory']['typeofowner']) ? $resp['ownershipHistory']['typeofowner'] : 'Type Of Owners '}}
                    </td>
                    @foreach(array_slice($resp['ownershipHistory']['typeofowners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif

                @if(isset($resp['ownershipHistory']['ownershiplengthowners']) &&
                count($resp['ownershipHistory']['ownershiplengthowners']) > 0)
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['ownershipHistory']['ownershiplength']) ? $resp['ownershipHistory']['ownershiplength'] : 'Estimated Length of Ownership'}}
                    </td>
                    @foreach(array_slice($resp['ownershipHistory']['ownershiplengthowners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif

                @if(isset($resp['ownershipHistory']['provincesowners']) &&
                count($resp['ownershipHistory']['provincesowners']) > 0)
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['ownershipHistory']['provinces']) ? $resp['ownershipHistory']['provinces'] : 'Provinces'}}
                    </td>
                    @foreach(array_slice($resp['ownershipHistory']['provincesowners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif

                @if(isset($resp['ownershipHistory']['milesperyearowners']) &&
                count($resp['ownershipHistory']['milesperyearowners']) > 0)
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['ownershipHistory']['milesperyear']) ? $resp['ownershipHistory']['milesperyear'] : 'Miles Per Year'}}
                    </td>
                    @foreach(array_slice($resp['ownershipHistory']['milesperyearowners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif

                @if(isset($resp['ownershipHistory']['lastodometerreadingowners']) &&
                count($resp['ownershipHistory']['lastodometerreadingowners']) > 0)
                <tr>
                    <td colspan="2" style="width: 33%;">
                        {{isset($resp['ownershipHistory']['lastodometerreading']) ? $resp['ownershipHistory']['lastodometerreading'] : 'Last Reported Odometer Reading'}}
                    </td>
                    @foreach(array_slice($resp['ownershipHistory']['lastodometerreadingowners'] ?? [], -3) as $point)
                    <td><span class="checkmark"> {{$point}} </span></td>
                    @endforeach
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <br>







    <style>
    .record-section {
        border: 1px solid #dee2e6;
        border-radius: 5px;
        margin-bottom: 15px;
        padding: 10px;
    }

    .owner-header {
        align-items: center;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .owner-header img {
        margin-right: 10px;
    }

    .vehicle-history-table {
        width: 100%;
    }

    .vehicle-history-table th,
    .vehicle-history-table td {
        vertical-align: top;
        border: none;
        padding: 8px;
    }

    .comment-bullet {
        margin-left: 20px;
    }

    .icon {
        font-size: 16px;
        margin-right: 5px;
    }

    .rating {
        display: flex;
        align-items: center;
    }

    .rating .star {
        color: gold;
        margin-right: 3px;
    }

    .review {
        font-size: 12px;
        color: #6c757d;
    }
    </style>

    <div style="position: relative; width: 100%; padding-bottom: 20px;padding-top: 20px;">
        <div style="width:100%; border-top: 1px solid silver; padding-top: 15px"></div>
        <h4
            style="position: absolute; top: 0em; left: 50%; transform: translateX(-50%); align-items: center; background-color: white; margin: auto; padding: 10px; color: indigo;">
            Owners Details
        </h4>
    </div>

    <div class="my-4">
        @foreach($resp['ownersList'] ?? [] as $owner)
        <!-- Owner Section -->
        <div class="record-section" style="background: rgb(249, 249, 255); margin-bottom: 20px;">
            <div class="owner-header" style="display: flex; align-items: center; padding: 10px;">
                <span style="font-weight: bold;">Owner {{ $owner['ownerNo'] }}</span>
                <p class="ms-auto" style="font-weight: 400; color: grey;">
                    Purchased: {{ $owner['purchased'] }}
                </p>
            </div>
            <div style="width: 100%; border-top: 1px solid silver; padding-top: 15px; margin-bottom: 15px;"></div>
            <table class="vehicle-history-table" style="width: 100%; border-collapse: collapse;">
                <thead style="color: indigo; text-align: left;">
                    <tr>
                        <th style="padding: 8px;">Date</th>
                        <th style="padding: 8px;">Mileage</th>
                        <th style="padding: 8px;">Source</th>
                        <th style="padding: 8px;">Comments</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($owner['details'] as $detailKey => $detail)
                    <tr>
                        <td style="padding: 8px; font-size: 0.7em; white-space: nowrap;">{{ $detail['date'] }}</td>

                        <td style="padding: 8px;color:silver;">{{ $detail['mileage'] }}</td>
                        <td style="padding: 8px;">
                            {!! nl2br(e($detail['source'])) !!}
                        </td>
                        <td style="padding: 8px;">
                            {{ $detail['comments'] }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>





    <!-- ---------------------------------- -->

    <div style="position: relative; width: 100%; padding-bottom: 20px;padding-top: 20px;">
        <div style="width:100%; border-top: 1px solid silver; padding-top: 15px"></div>
        <h4
            style="position: absolute; top: 0em; left: 50%; transform: translateX(-50%); align-items: center; background-color: white; margin: auto; padding: 10px; color: green;">
            Glossary
        </h4>
    </div>
    <div class="my-4">
        <!-- Owner 4 Section -->
        <div class="record-section" style="background: rgb(249, 255, 252);">
            @foreach($resp['glossary'] ?? [] as $point)
            <h4 style="color: black;">{{ $point['title'] }}</h4>
            <p style="font-weight: 200; color: grey;">{{ $point['desc'] }}</p>
            @endforeach
        </div>

    </div>








    <!-- ---------------------------------- -->
    <div class="mt-4">
        <!-- Social Media and Disclaimer Section -->
        <div class="row mb-3">
            <div class="col-12">
                <div>
                    <span style="color:grey;">Follow Us: </span>

                    @if($resp['reportSetting']['showFacebook'] == 1)
                    <i class="fa-brands fa-facebook p-3"> Facbook: <a
                            href="{{isset($resp['reportSetting']['facebookLink']) ? $resp['reportSetting']['facebookLink'] : ''}}"
                            target="_blank">
                            {{isset($resp['reportSetting']['facebookLink']) ? $resp['reportSetting']['facebookLink'] : ''}}
                        </a> </i>
                    @endif
                    <!-- <i class="fa-brands fa-instagram p-3"> <a href="" target="_blank"> -->
                    @if($resp['reportSetting']['showWhatsapp'] == 1)
                    <i class="fa-brands fa-whatsapp p-3"> Whatsapp: <a
                            href="{{isset($resp['reportSetting']['whatsappLink']) ? $resp['reportSetting']['whatsappLink'] : ''}}"
                            target="_blank">
                            {{isset($resp['reportSetting']['whatsappLink']) ? $resp['reportSetting']['whatsappLink'] : ''}}
                        </a> </i>
                    @endif

                    @if($resp['reportSetting']['showInstagaram'] == 1)
                    <i class="fa-solid fa-circle-info p-3"> Instagram: <a
                            href="{{isset($resp['reportSetting']['instagaramLink']) ? $resp['reportSetting']['instagaramLink'] : ''}}"
                            target="_blank">
                            {{isset($resp['reportSetting']['instagaramLink']) ? $resp['reportSetting']['instagaramLink'] : ''}}
                        </a> </i>
                    @endif

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="small">
                    <p class="mb-1">
                        {{isset($resp['reportSetting']['socialmediaDesc']) ? $resp['reportSetting']['socialmediaDesc'] : ''}}
                    </p>
                    <br>
                    <p class="mb-0 text-muted small" style="color:grey;">
                        {{isset($resp['reportSetting']['rightReservedDesc']) ? $resp['reportSetting']['rightReservedDesc'] : ''}}
                    </p>
                </div>
            </div>
        </div>
        <br>
        <!-- Signature Section -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="border p-3 rounded">
                    <p class="mb-4 text-center text-muted"
                        style="font-weight:300; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        {{isset($resp['reportSetting']['signatureDesc']) ? $resp['reportSetting']['signatureDesc'] : ''}}
                    </p><br><br><br />
                    <div
                        style="width:100%; display:flex; flex-direction:row; justify-content: space-between; border-top: 1px solid silver; padding-top: 15px">

                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 25%;">Customer Signature</td>
                                <td style="width: 25%;">Date</td>
                                <td style="width: 25%;">Dealer Signature</td>
                                <td style="width: 25%;">Date</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>







</body>
<!-- <body>
    <style>
    .page-break {
        page-break-after: always;
    }
    </style>
    <h1>Page 1</h1>
    <div class="page-break"></div>
    <h1>Page 2</h1>
</body> -->

</html>