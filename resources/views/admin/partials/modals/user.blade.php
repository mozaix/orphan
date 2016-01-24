<!-- Modal -->
<div id="user">
	<div class="modal fade" id="add-user-modal" tabindex="-1" role="dialog" aria-labelledby="add-user-modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Shto Përdorues</h4>
				</div>
				<div class="modal-body">

					<input type="hidden" id="current-user-id" v-model="currentID" value="blank">

					<div class="row">
						<div class="col-md-12 form-group">
							<label>Emri</label>
							<input type="text" class="form-control" placeholder="Emri i përdoruesit"
							value="@{{ user.name }}" v-model="user.name">
						</div>

						<div class="col-md-12 form-group">
							<label>Emri i kyçjes</label>
							<input type="text" class="form-control" placeholder="Emri kyçes"
							value="@{{ user.username }}" v-model="user.username">
						</div>

						<div class="col-md-12 form-group">
							<label>Email</label>
							<input type="text" class="form-control" placeholder="Email e përdoruesit"
							value="@{{ user.email }}" v-model="user.email">
						</div>

						<div class="col-md-12 form-group">
							<label>Fjalekalimi</label>
							<input type="password" class="form-control" placeholder="Fjalekalimi i përdoruesit"
							value="@{{ user.password }}" v-model="user.password">
						</div>

						<div class="col-md-4 form-group">
							<label>Gjuha</label>
							<select class="form-control" placeholder="Gjuha" v-model="user.language">
								<option value="al" :selected="user.language == 'al'">Shqip</option>
								<option value="ar-kw" :selected="user.language == 'ar-kw'">Arabisht</option>
							</select>
						</div>

						<div class="col-md-4 form-group">
							<label>Roli?</label>
							<select class="form-control" placeholder="Gjuha" v-model="user.type">
								<option value="admin" :selected="user.type == 'admin'">Admin</option>
								<option value="view" :selected="user.type == 'view'">View</option>
							</select>
						</div>

						<div class="col-md-4 form-group">
							<label>Aktiv?</label>
							<input type="checkbox" class="cbx hide" id="active" 
							v-model="user.active">
							<label for="active" class="lbl"></label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" 
					@click="submit">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</div>