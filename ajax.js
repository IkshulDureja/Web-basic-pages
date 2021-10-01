import {
  createStackNavigator,
  StackNavigationProp,
} from "@react-navigation/stack";
import React from "react";
import DrawerScreen from "./Drawer";

const AppStack = createStackNavigator();

const AppStackScreen = () => {
  return (
    <AppStack.Navigator initialRouteName="init">
      <AppStack.Screen
        name="init"
        options={{
          header: () => null,
        }}
        component={DrawerScreen}
      />
    </AppStack.Navigator>
  );
};

export default AppStackScreen;
