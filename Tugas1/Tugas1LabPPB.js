import React, { Component } from 'react';
import {View, StyleSheet, SafeAreaView, Image, Text} from 'react-native';

class Tugas1LabPPB extends Component {
    render() {
        return (
            <View>
             <Image source={require("../assets/ibay.jpg")  } / >
               <Text>My Profile!</Text>
                <Text>NAMA     : MOHAMMAD wIQBAL FAHMI</Text>
                <Text>KELAS    : TI-22-PA </Text>
                <Text>NPM       : 222310046</Text>
               
            </View>
        );
    }
}

const styles = StyleSheet.create({})

export default Tugas1LabPPB;
