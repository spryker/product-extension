<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesStatistics\Persistence\Mapper;

use Generated\Shared\Transfer\SalesStatisticTransfer;
use Spryker\Zed\SalesStatistics\Persistence\SalesStatisticsRepository;

class SalesStatisticsMapper implements SalesStatisticsMapperInterface
{
    public const DECIMAL = 100;
    /**
     * @param array $statistic
     *
     * @return \Generated\Shared\Transfer\SalesStatisticTransfer
     */
    public function mapCountStatisticToEntityTransfer(array $statistic): SalesStatisticTransfer
    {
        $chartDataTraceTransfer = new SalesStatisticTransfer();
        if ($statistic) {
            foreach ($statistic as $statisticItem) {
                $chartDataTraceTransfer->addLabels($statisticItem[SalesStatisticsRepository::DATE]);
                $chartDataTraceTransfer->addValues($statisticItem[SalesStatisticsRepository::COUNT]);
            }
        }

        return $chartDataTraceTransfer;
    }

    /**
     * @param array $statistic
     *
     * @return \Generated\Shared\Transfer\SalesStatisticTransfer
     */
    public function mapStatusOrderStatisticToEntityTransfer(array $statistic): SalesStatisticTransfer
    {
        $chartDataTraceTransfer = new SalesStatisticTransfer();
        if ($statistic) {
            foreach ($statistic as $statisticItem) {
                $chartDataTraceTransfer->addLabels($statisticItem[SalesStatisticsRepository::STATUS_NAME]);
                $chartDataTraceTransfer->addValues($statisticItem[SalesStatisticsRepository::TOTAL] / static::DECIMAL);
            }
        }

        return $chartDataTraceTransfer;
    }
}
