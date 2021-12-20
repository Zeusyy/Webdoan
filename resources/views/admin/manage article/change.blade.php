<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">{{__("article.ID")}}</th>
                
                <th scope="col">{{__('article.Title')}}</th>
                <th scope="col">{{__('article.Abstracr')}}</th>
                <th scope="col">{{__('article.Created_at')}}</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td><a href="{{route('article.show',$article)}}">{{$article->title}}</a></td>
                    <td>{{$article->abstract}}</td>
                    <td>{{$article->created_at}}</td>
                    <td><a class="btn btn-primary" href="{{route('article.edit',[$article])}}"><i class="bi bi-pencil-fill"></i></a></td>
                    <td>
                        <button onclick="deleteArticle({{$article->id}})" class="btn btn-danger" type="button"><i class="bi bi-trash-fill"></i></button>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>