<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Rate our service
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Rate our service</h4>
      </div>
      <div class="modal-body">
          <form action="about/index" method="post">
            <input type="text" class="form-control" placeholder="Name" name="name"><br>
            <input type="email" class="form-control" placeholder="Email" name="email"><br>
            <textarea class="form-control" rows="3" placeholder="Comments" name="comments"></textarea><br>
            <label>Select rating</label>
            <select multiple class="form-control" name="rating">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>
</div>