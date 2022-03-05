<!-- Import Data Modal-->
<div class="modal fade" id="importDataModal" tabindex="-1" role="dialog" aria-labelledby="importDataModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="importDataModalLabel">Upload Data</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">

			<!-- File Input -->
			<div>
				<label class="form-label" for="importDataPath">Select directory with DICOM files.</label>
				<input type="file" class="form-control" id="importDataPath" />
			</div>


			<!-- Meta Parameters -->
			<hr>
			<h6>Metaparameters</h6>
			<div class="input-group" style="padding-top: 10px;">
				<span class="input-group-text">UID</span>
				<input type="text" class="form-control" placeholder="0000001" id="uid">
			</div>

			<div class="input-group" style="padding-top: 10px;">
				<span class="input-group-text">Modality</span>
				<input type="text" class="form-control" placeholder="MRI" id="dataModality">
			</div>

			<div class="input-group" style="padding-top: 10px;">
				<span class="input-group-text">Diagnosis</span>
				<input type="text" class="form-control" placeholder="Adamantinomatous Craniopharyngioma" id="dataDiagnosis">
			</div>

			<div class="row-cols-2">		
				<div class="form-check" style="padding-top: 10px;">
					<input class="form-check-input" type="checkbox" id="preop" name="preop" value="yes" checked>
					<label class="form-check-label">Pre</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="postop" name="postop" value="no">
					<label class="form-check-label">Post</label>
				</div>
			</div>

			<div class="form-check form-switch" style="padding-top: 50px;">
				<input class="form-check-input" type="checkbox" id="tempUpload" name="tempUpload" value="yes" checked>
				<label class="form-check-label">Temporary Upload</label>
				<p style="font-size: small">Note: data uploaded temporarily will be discarded once you exit out of the session.</p>
			</div>


			</div>
			<!-- End Modal Body -->
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Upload</a>
			</div>
		</div>
	</div>
</div>