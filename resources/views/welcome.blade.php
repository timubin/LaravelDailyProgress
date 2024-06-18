@extends('layouts.masterlayout')

@section('content')
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, molestias!</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eum eveniet, fugiat alias quod totam, impedit maiores quasi tempora voluptatum architecto, et accusamus eos maxime ea quia reiciendis. Nihil earum deserunt provident impedit perferendis eveniet nemo saepe aliquid voluptas ipsam sapiente minus sed modi, quos numquam illum tempora debitis similique, id, blanditiis iure ea! Aliquid velit et ducimus labore numquam adipisci laudantium dignissimos repudiandae vitae vero, nobis cum quae tempora illo odio ex distinctio sequi necessitatibus provident esse consectetur dolor. Dolor voluptate in rerum maiores facere aliquam sint corrupti assumenda cupiditate vitae dignissimos eius iure quam harum accusantium a omnis sed, unde nisi? Culpa illo saepe esse veritatis! Ex excepturi veniam dignissimos laboriosam laborum. Illo ea necessitatibus labore, aut repellat quia beatae minus architecto expedita sapiente, soluta vero doloremque pariatur perferendis qui officia sunt iure quibusdam eveniet voluptatibus omnis nobis! Id iste est voluptates deleniti optio delectus harum non? Blanditiis quam voluptate molestias provident voluptatem similique commodi rem quasi harum incidunt nostrum vel, veniam autem. Reprehenderit provident error esse quibusdam iste corrupti, dolore molestias tempora hic voluptatum mollitia repudiandae rerum numquam laboriosam dignissimos. Qui commodi quidem, maxime ipsa molestiae placeat fugit vitae quia? Ea eligendi quos reprehenderit asperiores beatae fugit.</p>
@endsection


@section('title')
Home
@endsection

@push('scripts')
<script src="/example.js"></script>
    
@endpush

@push('style')

<link rel="stylesheet" href="css/bootstrap.min.css">
    
@endpush

@prepend('style')
    <style>
        #wrapper{
            background-color: aqua;
        }
    </style>
@endprepend