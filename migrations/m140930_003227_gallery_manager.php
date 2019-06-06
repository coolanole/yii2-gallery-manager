<?php

declare(strict_types=1);

namespace coolanole\yii2\galleryManager\migrations;

use yii\db\Migration;

/**
 * @author Victor Borkowski <coolanole@cumallover.me>
 */
class m140930_003227_gallery_manager extends Migration
{
    private $tableName = '{{%gallery_image}}';

    /**
     * {@inheritdoc}
     *
     * @author Victor Borkowski <coolanole@cumallover.me>
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id'          => 'UUID NOT NULL DEFAULT uuid_generate_v4()',
            'type'        => 'TEXT NOT NULL',
            'ownerId'     => 'UUID NOT NULL',
            'rank'        => 'INT8 NOT NULL DEFAULT 0',
            'name'        => 'TEXT NOT NULL',
            'description' => 'TEXT NOT NULL',
        ]);

        $this->addPrimaryKey('pk-gallery_image[id]', $this->tableName, 'id');
    }

    /**
     * {@inheritdoc}
     *
     * @author Victor Borkowski <coolanole@cumallover.me>
     */
    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
