/**
 * @fileoverview Todo Javascript
 * @author kotaro.hokada@gmail.com (Kotaro Hokada)
 */


/**
 * Todo Javascript
 *
 * @param {string} Controller name
 * @param {function(scope, http, sce, timeout)} Controller
 */
NetCommonsApp.controller('Todo',
    function($scope , $http, $sce, $timeout) {

      /**
       * frame id
       *
       * @type {number}
       */
      $scope.frameId = 0;

      /**
       * Initialize
       *
       * @param {int} frame id
       * @return {void}
       */
      $scope.initialize = function(frameId) {
        $scope.frameId = frameId;
      };

      /**
       * ブロック設定のモーダルを表示させる。
       *
       * @param void
       */
      $scope.openAdditionalTask = function() {
        $('.todo-additional-task:first', '#frame-wrap-' + $scope.frameId).modal('show');
      };

      /**
       * ブロック設定のモーダルを表示させる。
       *
       * @param void
       */
       $scope.openBlockSetting = function() {
       };
    });
