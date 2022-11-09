import LikeCounterField  from './fieldtypes/LikeCounter.vue';

Statamic.booting(() => {
    Statamic.$components.register('like_counter-fieldtype', LikeCounterField);
});
