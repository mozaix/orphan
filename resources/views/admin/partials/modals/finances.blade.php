<div class="col-sm-12 finances-wrapper">
	<div class="report-select">

		<select class="form-control col-sm-4 select-year" v-model="financesYear">
			<option v-for="year in orphan.finances.years" :value="year">@{{ year }}</option>
		</select>

		<button class="btn btn-link pull-right" @click="financesYear = false">Shto Raport</button>

		<button class="btn btn-default pull-right" 
		@click="confirmDeleteFinances(financesYear)"
		v-show="financesYear != false">Fshij kete raport</button>
	</div>

	<div class="finance-fields row">
		<div class="add-new-report" v-show="financesYear == false">
			<div class="col-md-4 col-md-push-4">
				<input type="text" class="form-control" v-model="newFinanceYear" placeholder="Viti" 
				@keyup.enter="addFinances()">
				<button class="btn btn-primary" @click="addFinances()">Shto</button>
			</div>
		</div>

		<div class="col-md-12" v-show="financesYear != false">
			<table class="table">
				<thead>
					<tr>
						<th style="width: 15%;">Muaji</th>
						<th style="width: 13%;">Ka Donacion?</th>
						<th style="width: 18%;">Shuma (E)</th>
						<th style="width: 18%;">Shuma (D)</th>
						<th style="width: 18%;">Lloji</th>
						<th style="width: 18%;">Data e marrjes</th>
					</tr>
				</thead>

				<tbody>
					<tr v-for="finance in getFinances(financesYear)">
						<td>
							<input type="text" class="form-control disabled-input" disabled="disabled" 
							:value="getMonth(finance.month)">
						</td>
						<td>
							<input type="checkbox" class="cbx hide" :id="$index + 'report_has_donation'" 
							v-model="orphan.finances.list[finance.finance_array_id].has_donation">
							<label :for="$index + 'report_has_donation'" class="lbl"></label>
						</td>

						<td>
							<input type="text" class="form-control" 
							v-model="orphan.finances.list[finance.finance_array_id].amount_euro"
							v-show="orphan.finances.list[finance.finance_array_id].has_donation">
						</td>

						<td>
							<input type="text" class="form-control" 
							v-model="orphan.finances.list[finance.finance_array_id].amount_dinar"
							v-show="orphan.finances.list[finance.finance_array_id].has_donation">
						</td>

						<td>
							<input type="text" class="form-control" 
							v-model="orphan.finances.list[finance.finance_array_id].type"
							v-show="orphan.finances.list[finance.finance_array_id].has_donation">
						</td>

						<td>
							<input type="text" class="form-control" 
							v-model="orphan.finances.list[finance.finance_array_id].received_at"
							v-show="orphan.finances.list[finance.finance_array_id].has_donation">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>