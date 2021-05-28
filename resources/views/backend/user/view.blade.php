<!DOCTYPE html>
<html lang="en">

    <!-- navbar start here -->
    @include('backend.inc.navbar')
    <!-- navbar end here -->

    <div id="layoutSidenav">
        @include('backend.inc.sidebar')

    <!-- sidebar end here -->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">User list</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">User list</li>
                        </ol>

                        <!-- Table start -->
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>{{ $user->updated_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- Table end -->

                    {{ $users->links() }}

                    </div>
                </main>
                
    <!-- footer start here -->
    @include('backend.inc.footer')
    <!-- footer end here -->
    
            </div>
        </div>

    <!-- js start here -->
    @include('backend.inc.js')
    <!-- js end here -->


</html>