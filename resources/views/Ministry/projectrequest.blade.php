@extends("Ministry.master")
@section("content")
    <div class="page-content" style="background-image: url('{{'assets/alluser/'}}applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($pr as $info)
                        @if($info['textilesMinistryFileStatus'] == 'processingtom' || $info['environmentMinistryFileStatus'] == 'processingtoe' || $info['foreignMinistryFileStatus'] == 'processingtof' || $info['planningMinistryFileStatus'] == 'processingtop')
                            <tr>
                                <td>{{$info['username']}}</td>
                                <td>PENDING</td>
                                <td> <a href="/ministryopenproject/{{$info['id']}}" style="background-color: #34eb65; width: 120px; height: 30px; font-size: 15px; color: white;">Open Project</a></td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
