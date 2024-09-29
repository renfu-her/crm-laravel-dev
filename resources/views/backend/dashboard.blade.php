@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Active Projects</h5>
                    <h2>69</h2>
                    <p>43 Pending (72%)</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Projects Earnings</h5>
                    <h2>$69,700</h2>
                    <p>+15% from last month</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">External Links</h5>
                    <ul>
                        <li>Client Rating</li>
                        <li>Instagram Followers</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Highlights</h5>
                    <p>Top Author Conversion Rate</p>
                    <p>92.56% - Jacob Jones</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">Performance Overview</div>
                <div class="card-body">
                    <canvas id="performanceChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">Recent Authors</div>
                <div class="card-body">
                    <ul>
                        <li>Guy Hawkins - 78.34%</li>
                        <li>Jane Cooper - 63.83%</li>
                        <li>Jacob Jones - 92.56%</li>
                        <li>Cody Fishers - 63.08%</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
