<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Promotions Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\HasMany $Orders
 * @property \App\Model\Table\ImagesTable&\Cake\ORM\Association\BelongsToMany $Images
 *
 * @method \App\Model\Entity\Promotion newEmptyEntity()
 * @method \App\Model\Entity\Promotion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Promotion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Promotion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Promotion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Promotion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Promotion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Promotion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Promotion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Promotion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Promotion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Promotion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Promotion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PromotionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('promotions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'promotion_id',
        ]);
        $this->belongsToMany('Images', [
            'foreignKey' => 'promotion_id',
            'targetForeignKey' => 'image_id',
            'joinTable' => 'images_promotions',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 512)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->boolean('state')
            ->notEmptyString('state');

        $validator
            ->numeric('price_original')
            ->requirePresence('price_original', 'create')
            ->notEmptyString('price_original');

        $validator
            ->numeric('price_discount')
            ->allowEmptyString('price_discount');

        $validator
            ->scalar('body')
            ->requirePresence('body', 'create')
            ->notEmptyString('body');

        $validator
            ->dateTime('available_since')
            ->notEmptyDateTime('available_since');

        $validator
            ->dateTime('available_until')
            ->allowEmptyDateTime('available_until');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }

    /**
     * Devuelve todas las promociones que cumplen las condiciones para ser consideras activas.
     *
     * @param \Cake\ORM\Query|null $query
     * @return \Cake\ORM\Query
     */
    public function showActive($query = null): \Cake\ORM\Query
    {
        $query = ($query) ?: $this->find();
        $query = $query->where(['Promotions.state IS' => 1]);

        return $query;
    }

    /**
     * Devuelve todas las promociones asociadas a una categoría.
     *
     * @param integer $categoryId La ID de la categoría filtrada.
     * @return \Cake\ORM\Query
     */
    public function inCategory(int $categoryId): \Cake\ORM\Query
    {
        $query = $this
            ->showActive()
            ->where(['Promotions.category_id' => $categoryId]);

        return $query;
    }
}
