		<div class="products">
			<div class="inner">
				<div class="wrapper">
					<div class="content">
						<div class="product">
							<div class="img">
								<img src="/img/committee/{{ $committee['01']['img'] }}" style="width:100%;" class="img-responsive center-block" />
							</div>
							<div class="detail">
								<p class="text-left">{{ $committee['01']['name'] }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 visible-xs top-buffer"></div>
			<div class="inner">
				<div class="wrapper">
					<div class="content">
						<div class="product">
							<div class="img">
								<img src="/img/committee/{{ $committee['02']['img'] }}" style="width:100%;" class="img-responsive" />
							</div>
							<div class="detail">
								<p class="text-left">{{ $committee['02']['name'] }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="top-buffer"></div>

		@if ( isset($committee['03']) )
		<div class="products">
			<div class="inner">
				<div class="wrapper">
					<div class="content">
						<div class="product">
							<div class="img">
								<img src="/img/committee/{{ $committee['03']['img'] }}" style="width:100%;" class="img-responsive" />
							</div>
							<div class="detail">
								<p class="text-left">{{ $committee['03']['name'] }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@if ( isset($committee['04']) )
			<div class="col-xs-12 visible-xs top-buffer"></div>
			@endif
			<div class="inner">
				<div class="wrapper">
					<div class="content">
						@if ( isset($committee['04']) )
						<div class="product">
							<div class="img">
								<img src="/img/committee/{{ $committee['04']['img'] }}" style="width:100%;" class="img-responsive" />
							</div>
							<div class="detail">
								<p class="text-left">{{ $committee['04']['name'] }}</p>
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		@endif

		<div class="top-buffer"></div>