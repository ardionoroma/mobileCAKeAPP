<?php
	require "FCFF.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>FCFF</title>
	<style>
		td{text-align: right;}
	</style>
</head>
<body>
	<?php
		$a = new FCFF(2449405299014, 2830227702473, 311709573423, 255113007336, 681524616665, 14550736000, 4030514864860, 13211605971, 759757945109, 708761732542, 421198798639, 113026440522, 494725024000, 0.25, 0.07375, 0.2037, 1.78, 0.05092);
	?>
	<table border="1">
		<tr>
			<th></th>
			<th>2016</th>
			<th>2017</th>
		</tr>
		<tr>
			<th>Current Assets</th>
			<td><?php echo rupiah($a->currentAssets2YearAgo); ?></td>
			<td><?php echo rupiah($a->currentAssets1YearAgo); ?></td>
		</tr>
		<tr>
			<th>Total Assets</th>
			<td></td>
			<td><?php echo rupiah($a->totalAssets); ?></td>
		</tr>
		<tr>
			<th>Current Liabilities</th>
			<td><?php echo rupiah($a->currentLiabilities2YearAgo); ?></td>
			<td><?php echo rupiah($a->currentLiabilities1YearAgo); ?></td>
		</tr>
		<tr>
			<th>Total Liabilities</th>
			<td></td>
			<td><?php echo rupiah($a->totalLiabilities); ?></td>
		</tr>
		<tr>
			<th>Outstanding Share</th>
			<td></td>
			<td><?php echo rupiah($a->outstandingShare); ?></td>
		</tr>
		<tr>
			<th>Total Equity</th>
			<td></td>
			<td><?php echo rupiah($a->totalEquity); ?></td>
		</tr>
		<tr>
			<th>Interest Expense</th>
			<td></td>
			<td><?php echo rupiah($a->interestExpense); ?></td>
		</tr>
		<tr>
			<th>EBIT</th>
			<td></td>
			<td><?php echo rupiah($a->ebit); ?></td>
		</tr>
		<tr>
			<th>Net Income</th>
			<td></td>
			<td><?php echo rupiah($a->netIncome); ?></td>
		</tr>
		<tr>
			<th>Capital Expenditure</th>
			<td></td>
			<td><?php echo rupiah($a->capitalExpenditure); ?></td>
		</tr>
		<tr>
			<th>Depreciation</th>
			<td></td>
			<td><?php echo rupiah($a->depreciation); ?></td>
		</tr>
		<tr>
			<th>Changes in Working Capital</th>
			<td></td>
			<td><?php echo rupiah($a->changesInWorkingCapital); ?></td>
		</tr>
		<tr>
			<th>Dividend Payment</th>
			<td></td>
			<td><?php echo rupiah($a->dividendPayment); ?></td>
		</tr>
		<tr>
			<th>FCFF</th>
			<td></td>
			<td><?php echo rupiah($a->fcff); ?></td>
		</tr>
	</table>
	<br>
	<table border="1">
		<tr>
			<th>Tax Rate</th>
			<td><?php echo percentator($a->taxRate)."%"; ?></td>
		</tr>
		<tr>
			<th>Risk Free Rate</th>
			<td><?php echo percentator($a->riskFreeRate)."%"; ?></td>
		</tr>
		<tr>
			<th>Expected Market Return</th>
			<td><?php echo percentator($a->expectedMarketReturn)."%"; ?></td>
		</tr>
		<tr>
			<th>Beta</th>
			<td><?php echo $a->beta; ?></td>
		</tr>
		<tr>
			<th>Cost of Equity (CAPM)</th>
			<td><?php echo percentator($a->costOfEquity)."%"; ?></td>
		</tr>
		<tr>
			<th>Cost of Debt (After Tax)</th>
			<td><?php echo percentator($a->costOfDebt)."%"; ?></td>
		</tr>
		<tr>
			<th>Weighted Average Cost of Capital</th>
			<td><?php echo percentator($a->weightedAverageCostOfCapital)."%"; ?></td>
		</tr>
	</table>
	<br>
	<table border="1">
		<tr>
			<th>Return on Capital</th>
			<td><?php echo percentator($a->returnOnCapital)."%"; ?></td>
		</tr>
		<tr>
			<th>Dividend Payout Ratio</th>
			<td><?php echo percentator($a->dividendPayoutRatio)."%"; ?></td>
		</tr>
		<tr>
			<th>Retention Ratio</th>
			<td><?php echo percentator($a->retentionRatio)."%"; ?></td>
		</tr>
		<tr>
			<th>Expected Growth Rate</th>
			<td><?php echo percentator($a->expectedGrowthRate)."%"; ?></td>
		</tr>
		<tr>
			<th>Stable Growth</th>
			<td><?php echo percentator($a->stableGrowth)."%"; ?></td>
		</tr>
	</table>
	<br>
	<table border="1">
		<tr>
			<th>Intrinsic Value</th>
			<th><?php echo rupiah($a->intrinsicValue); ?></th>
		</tr>
	</table>
	<?php
		function percentator($num){
			return $num * 100;
		}
		function rupiah($angka){
			$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
			return $hasil_rupiah;
		}
	?>
</body>
</html>