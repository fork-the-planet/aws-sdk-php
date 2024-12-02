<?php
// This file was auto-generated from sdk-root/src/data/billing/2023-09-07/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'ListBillingViews' => [ [ 'input' => [ 'activeTimeRange' => [ 'activeAfterInclusive' => 1719792000, 'activeBeforeInclusive' => 1722470399.999, ], ], 'output' => [ 'billingViews' => [ [ 'name' => 'Primary Billing View Account 123456789101', 'arn' => 'arn:aws:billing::123456789101:billingview/primary', 'billingViewType' => 'PRIMARY', 'ownerAccountId' => '123456789101', ], ], ], 'id' => 'example-1', 'title' => 'Invoke ListBillingViews', ], [ 'input' => [ 'activeTimeRange' => [ 'activeAfterInclusive' => 1719792001, 'activeBeforeInclusive' => 1719792000, ], ], 'id' => 'example-2', 'title' => 'Error example for ListBillingViews', ], ], ],];