<div class="card border-0">
	<div class="card-body ">
		<div class="card-title p-3  text-white" style="background-color: #2e247d"><strong> Contact Us For Help</strong></div>
		<form
				action="mail.php"
				method="post"
				role="form"
				class="php-email-form"
				
				>
				<div class="form-group mt-3">
					<input
							type="text"
							name="name"
							class="form-control"
							id="name"
							placeholder="Your Name"
							required
							/>
				</div>
				<div class="form-group mt-3">
					<input
							type="text"
							class="form-control"
							name="mobileno"
							id="mobileno"
							placeholder="Mobile Number"
							required
							/>
				</div>
				<div class="form-group mt-3">
					<input
							type="email"
							class="form-control"
							name="email"
							id="email"
							placeholder="Your Email"
							required
							/>
				</div>
				<div class="form-group mt-3">
					<select name="property" id="property" class="form-control" required >
						<option value="">--Select Property--</option>
						<option value="East Facing">East Facing</option> 
						<option value="North Facing">North Facing</option>           
						<option value="West Fasing">West Facing</option>
						<option value="South Facing">South Facing</option>
						<option value="North East Corner">North East Corner</option>
						<option value="South East Corner">South East Corner</option>
					</select>
				</div>
				<div class="form-group mt-3">
					<textarea
							class="form-control"
							name="message"
							rows="5"
							id="message"
							placeholder="Message"
							></textarea>
				</div>
				<div class="text-center py-2">
					<input type="submit" class="btn btn-warning" value="Send Message">
				</div>
		</form>
	</div>
</div>