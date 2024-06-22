<header class="bg-surface-primary border-bottom pt-6" style="margin-bottom: 20px;">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center py-4">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    
                    <h1 class="h2 mb-0 ls-tight"> @yield('Welcometitle') </h1>
                    <h1 class="h2 mb-0 ls-tight"> @yield('title') </h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">
                        @yield('header-button')
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>