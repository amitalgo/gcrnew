
<div class="removeDivElement">
    <hr/>
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" required="required" placeholder="Title" type="text" name="title[]">
            </div>
        </div>
        <div class="col-sm-6">

            {{--<label>Solution</label>--}}
            {{--<select class="form-control select2" required="required" id="sol_id" name="solution[]">--}}
                {{--<option value="">Choose Solution</option>--}}
                {{--@foreach($solutions as $solution)--}}
                    {{--<option value="{{$solution->getId()}}">{{$solution->getName()}}</option>--}}
                {{--@endforeach--}}

            {{--</select>--}}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12 parents">
        <div class="col-sm-1">
            <div class="form-group">
                <label> Is Image </label><br/>
                <input type="checkbox" class="is_video" name="is_video[]" value="@if(isset($experience)){{$experience->getIsVideo()}} @endif"/>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group UrlIsHide">
                <label> URL  </label>
                <input class="form-control" required="required" placeholder="You Tube Url" type="url" name="url[]">
            </div>
            <div class="form-group ImgAndRedirectLinkIsHide">
                <label> Upload Image  </label>
                <input class="filestyle" data-size="sm" placeholder="Browse Image" type="file" name="image[]"/>

            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group ImgAndRedirectLinkIsHide">
                <label> Redirect Link  </label>
                <input class="form-control" placeholder="Redirect Link" type="text" name="r-link[]" >
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">
                <label> </label>
                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger" onclick="init.removeForm(this)"> <i class="fa fa-remove"></i> </button>
            </div>
        </div>
    </div>
</div>
</div>